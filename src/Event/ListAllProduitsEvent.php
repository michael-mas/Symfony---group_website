<?php

namespace App\Event;

use App\Entity\Produits;
use Symfony\Contracts\EventDispatcher\Event;

class ListAllProduitsEvent extends Event
{
    const LIST_ALL_Produits_EVENT = 'produits.list_alls';

    public function __construct(private int $nbProduits) {}

    public function getNbProduits(): int {
        return $this->nbProduits;
    }

}