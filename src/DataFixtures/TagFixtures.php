<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tag;
use App\Entity\Lien;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $tag = new Tag();
        $tag -> setTagName("internet");

        $manager -> persist($tag);
        $liens = $manager->getRepository(Lien::class)->findBy(['lien_url' => ['https://google.com', 'https://letelegramme.fr']]);

        foreach ($liens as $lien) {
            $tag->addLien($lien);
        }
        $manager->flush();



        $tag = new Tag();
        $tag -> setTagName("journal");

        $manager -> persist($tag);
        $liens = $manager->getRepository(Lien::class)->findBy(['lien_url' => ['https://letelegramme.fr']]);

        foreach ($liens as $lien) {
            $tag->addLien($lien);
        }
        $manager->flush();
    }
}
