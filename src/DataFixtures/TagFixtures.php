<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tag;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $tag = new Tag();
        $tag -> setTagName("internet");
        $manager -> persist($tag);

        $manager->flush();
    }
}
