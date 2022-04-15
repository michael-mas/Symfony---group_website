<?php

namespace App\Event;

use App\Entity\Produits;
use Symfony\Contracts\EventDispatcher\Event;


class AddProduitsEvent extends Event
{
    const ADD_PRODUITS_EVENT = 'produits.add';

    public function __construct(private Produits $produits) {}

    public function getProduits(): Produits {
        return $this->produits;
    }

}