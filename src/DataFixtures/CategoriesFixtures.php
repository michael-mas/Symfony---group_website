<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class CategoriesFixtures extends Fixture
{
    private $counter = 1;

    public function __construct(){}

    public function load(ObjectManager $manager): void
    {
        $parent = $this->createCategory('Tshirt', null, $manager);
        
       

        $parent = $this->createCategory('CD', null, $manager);

  
                
        $manager->flush();
    }

    public function createCategory(string $name, Categories $parent = null, ObjectManager $manager)
    {
        $category = new Categories();
        $category->setNom($name);
        $category->setParent($parent);
        $manager->persist($category);

        $this->addReference('cat-'.$this->counter, $category);
        $this->counter++;

        return $category;
    }
}
