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
	    $lien -> setLienImage("https://www.meosis.fr/wp-content/uploads/elementor/thumbs/nouveau-logo-google-ous5r5ngyxz73d54tkv9iztdczrxhqe6bcqwq373ig.png");

        $manager -> persist($lien);

        $lien = new Lien();
        $lien -> setLienUrl("https://letelegramme.fr");
        $lien -> setLienTitre("Le Télégramme");
        $lien -> setLienDesc("Journal de Bretagne");
        $lien -> setLienImage("https://yt3.googleusercontent.com/YCyEHOYBzDXFSOLHHhVAqglOnqPswJ6xtriVaoruADqolLI2EFOJ2ZO2g5VeAaHgwJ0Ff7IqiiE=s900-c-k-c0x00ffffff-no-rj");
        $manager -> persist($lien);


        $manager->flush();
    }
}
