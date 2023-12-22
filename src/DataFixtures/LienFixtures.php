<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lien;

class LienFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $lien = new Lien();
        $lien -> setLienUrl("https://google.com");
        $lien -> setLienTitre("Google");
        $lien -> setLienDesc("Moteur de recherche");
        $manager -> persist($lien);

        $manager->flush();
    }
}
