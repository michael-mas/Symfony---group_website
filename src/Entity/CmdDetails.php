<?php

namespace App\Entity;

use App\Repository\CmdDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CmdDetailsRepository::class)]
class CmdDetails
{

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'integer')]
    private $prix;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Commandes::class, inversedBy: 'cmdDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private $commandes;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Produits::class, inversedBy: 'cmdDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private $produits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCommandes(): ?Commandes
    {
        return $this->commandes;
    }

    public function setCommandes(?Commandes $commandes): self
    {
        $this->commandes = $commandes;

        return $this;
    }

    public function getProduits(): ?Produits
    {
        return $this->produits;
    }

    public function setProduits(?Produits $produits): self
    {
        $this->produits = $produits;

        return $this;
    }
}
