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
        $tagsData = [
            "Moteur de recherche" => [
                'https://google.com',
                'https://duckduckgo.com/',
                'https://www.bing.com/',
                'https://www.deepl.com/translator'
            ],
            "Media" => [
                'https://letelegramme.fr',
                'https://www.lemonde.fr/',
                'https://www.reddit.com/',
                'https://discord.com/'
            ],
            "CVTIC" => [
                'https://cvtic.unilim.fr/',
            ],
            "Références" => [
                'https://developer.mozilla.org/fr/docs/Learn',
                'https://www.wampserver.com/',
                'https://www.cnil.fr/fr',
                'https://fr.wikipedia.org'
            ],
            "Hébergement" => [
                'https://www.ionos.fr',
                'https://wordpress.com/fr/',
                'https://www.php.net/manual/fr/index.php'
            ],
            "Actualités" => [
                'https://www.lemonde.fr/',
                'https://www.reddit.com/',
                'https://discord.com/',
                'https://www.onisep.fr'
            ],
            "Shopping en ligne" => [
                'https://www.rueducommerce.fr',
                'https://www.ldlc.com'
            ],
            "Outils de développement" => [
                'https://www.https://validator.w3.org/.net/manual/fr/index.php',
                'https://www.postman.com/',
                'https://fr.wikipedia.org'
            ]
        ];

        foreach ($tagsData as $tagName => $links) {
            $tag = new Tag();
            $tag->setTagName($tagName);
            $manager->persist($tag);

            $liens = $manager->getRepository(Lien::class)->findBy(['lien_url' => $links]);

            foreach ($liens as $lien) {
                $tag->addLien($lien);
            }

            $manager->flush();
        }
    }
}
