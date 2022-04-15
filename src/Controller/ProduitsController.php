<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Event\AddProduitsEvent;
use App\Event\ListAllProduitsEvent;
use App\Form\ProduitsType;
use App\Service\Helpers;
use App\Service\MailerService;
use App\Service\PdfService;
use App\Service\UploaderService;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[
    Route('produits'),
    IsGranted('ROLE_USER')
]
class ProduitsController extends AbstractController
{

    public function __construct(
        private LoggerInterface $logger,
        private Helpers $helper,
        private EventDispatcherInterface $dispatcher
    )
    {}

    #[Route('/', name: 'produits.list')]
    public function index(ManagerRegistry $doctrine): Response {
        $repository = $doctrine->getRepository(Produits::class);
        $produits = $repository->findAll();
        return $this->render('produit/index.html.twig', ['produits' => $produits]);
    }
    #[Route('/pdf/{id}', name: 'produits.pdf')]
    public function generatePdfProduits(Produits $produits = null, PdfService $pdf) {
        $html = $this->render('produit/detail.html.twig', ['produits' => $produits]);
        $pdf->showPdfFile($html);
    }

    #[Route('/alls/age/{prixMin}/{prixMax}', name: 'produits.list.age')]
    public function produitsByAge(ManagerRegistry $doctrine, $prixMin, $prixMax): Response {

        $repository = $doctrine->getRepository(Produits::class);
        $produits = $repository->findProduitsByAgeInterval($prixMin, $prixMax);
        return $this->render('produit/index.html.twig', ['produits' => $produits]);
    }
    #[Route('/stats/age/{prixMin}/{prixMax}', name: 'produits.list.age')]
    public function statsProduitsByAge(ManagerRegistry $doctrine, $prixMin, $prixMax): Response {
        $repository = $doctrine->getRepository(Produits::class);
        $stats = $repository->statsProduitsByAgeInterval($prixMin, $prixMax);
        return $this->render('produit/stats.html.twig', [
            'stats' => $stats[0],
            'prixMin'=> $prixMin,
            'prixMax' => $prixMax]
        );
    }

    #[
        Route('/alls/{page?1}/{nbre?12}', name: 'produits.list.alls'),
        IsGranted("ROLE_USER")
    ]
    public function indexAlls(ManagerRegistry $doctrine, $page, $nbre): Response {
//        echo ($this->helper->sayCc());
        $repository = $doctrine->getRepository(Produits::class);
        $nbProduits = $repository->count([]);
        // 24
        $nbrePage = ceil($nbProduits / $nbre) ;

        $produits = $repository->findBy([], [],$nbre, ($page - 1 ) * $nbre);
        $listAllProduitsEvent = new ListAllProduitsEvent(count($produits));
        $this->dispatcher->dispatch($listAllProduitsEvent, ListAllProduitsEvent::LIST_ALL_Produits_EVENT);

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
            'isPaginated' => true,
            'nbrePage' => $nbrePage,
            'page' => $page,
            'nbre' => $nbre
        ]);
    }

    #[Route('/{id<\d+>}', name: 'produits.detail')]
    public function detail(Produits $produits = null): Response {
        if(!$produits) {
            $this->addFlash('error', "La produits n'existe pas ");
            return $this->redirectToRoute('produits.list');
        }

        return $this->render('produit/detail.html.twig', ['produits' => $produits]);
    }
    #[Route('/edit/{id?0}', name: 'produits.edit')]
    public function addProduits(
        Produits $produits = null,
        ManagerRegistry $doctrine,
        Request $request,
        UploaderService $uploaderService,
        MailerService $mailer
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $new = false;
        //$this->getDoctrine() : Version Sf <= 5
        if (!$produits) {
            $new = true;
            $produits = new Produits();
        }

        // $produits est l'image de notre formulaire
        $form = $this->createForm(ProduitsType::class, $produits);
        $form->remove('createdAt');
        // Mn formulaire va aller traiter la requete
        $form->handleRequest($request);
        //Est ce que le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()) {
            // si oui,
            // on va ajouter l'objet produits dans la base de données
            $image = $form->get('image')->getData();
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image) {
                $directory = $this->getParameter('produits_directory');
                $produits->setImage($uploaderService->uploadFile($image, $directory));
            }
            if($new) {
                $message = " a été ajouté avec succès";;
            } else {
                $message = " a été mis à jour avec succès";
            }
            $manager = $doctrine->getManager();
            $manager->persist($produits);

            $manager->flush();
            // Afficher un mssage de succès
            if($new) {
                // On a créer notre evenenement
                $addProduitsEvent = new AddProduitsEvent($produits);
                // On va maintenant dispatcher cet événement
                $this->dispatcher->dispatch($addProduitsEvent, AddProduitsEvent::ADD_PRODUITS_EVENT);
            }
            $this->addFlash('success',$produits->getNom(). $message );
            // Rediriger verts la liste des produits
            return $this->redirectToRoute('produits.list');
        } else {
            //Sinon
            //On affiche notre formulaire
            return $this->render('produit/add-produits.html.twig', [
                'form' => $form->createView()
            ]);
        }

    }
    #[
        Route('/delete/{id}', name: 'produits.delete'),
        IsGranted('ROLE_ADMIN')
    ]
    public function deleteProduits(Produits $produits = null, ManagerRegistry $doctrine): RedirectResponse {
        // Récupérer la produits
        if ($produits) {
            // Si la produits existe => le supprimer et retourner un flashMessage de succés
            $manager = $doctrine->getManager();
            // Ajoute la fonction de suppression dans la transaction
            $manager->remove($produits);
            // Exécuter la transacition
            $manager->flush();
            $this->addFlash('success', "La produits a été supprimé avec succès");
        } else {
            //Sinon  retourner un flashMessage d'erreur
            $this->addFlash('error', "Produits innexistante");
        }
        return $this->redirectToRoute('produits.list.alls');
    }
    #[Route('/update/{id}/{nom}/prix}', name: 'produits.update')]
    public function updateProduits(Produits $produits = null, ManagerRegistry $doctrine, $nom, $prix, $description) {
        //Vérifier que la produits à mettre à jour existe
        if ($produits) {
            // Si la produits existe => mettre a jour notre produits + message de succes
            $produits->setNom($nom);
            $produits->setPrix($prix);
            $produits->setDescription($description);
            $manager = $doctrine->getManager();
            $manager->persist($produits);

            $manager->flush();
            $this->addFlash('success', "La produits a été mis à jour avec succès");
        }  else {
            //Sinon  retourner un flashMessage d'erreur
            $this->addFlash('error', "Produits innexistante");
        }
        return $this->redirectToRoute('produits.list.alls');
    }
}
