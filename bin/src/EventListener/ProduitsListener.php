<?php

namespace App\EventListener;

use App\Event\AddProduitsEvent;
use App\Event\ListAllProduitsEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\KernelEvent;

class ProduitsListener
{
    public function __construct(private LoggerInterface $logger) {
}
    public function onProduitsAdd(AddProduitsEvent $event){
        $this->logger->debug("cc je suis entrain d'écouter l'evenement produits.add et une produits vient d'être ajoutée et c'est ". $event->getProduits()->getNom());
    }
    public function onListAllProduits(ListAllProduitsEvent $event){
        $this->logger->debug("Le nombre de produits dans la base est ". $event->getNbProduits());
    }
    public function onListAllProduits2(ListAllProduitsEvent $event){
        $this->logger->debug("Le second Listener avec le nbre :". $event->getNbProduits());
    }

    public function logKernelRequest(KernelEvent $event){
        dd($event->getRequest());
    }
}