<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use Faker\Factory;

class ProduitsFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i=0; $i < 100; $i++) {
            $produit = new Produits();
            $produit->setNom($faker->name);
            $produit->setDescription($faker->text());
            $produit->setPrix($faker->numberBetween(18, 565));
            $produit->setStock($faker->numberBetween(0, 10));

            $category = $this->getReference('cat-'. rand(1, 8));
            $product->setCategories($category);

            $this->setReference('prod-'.$prod, $produit);
            $manager->persist($produit);
        }
        $manager->flush();
    }
}
