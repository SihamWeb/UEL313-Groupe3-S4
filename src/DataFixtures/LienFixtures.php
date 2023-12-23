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
        $lien -> setLienDesc("Google est une entreprise américaine de services technologiques fondée en 1998 dans la Silicon Valley, en Californie, par Larry Page et Sergey Brin, créateurs du moteur de recherche Google. C'est une filiale de la société Alphabet depuis août 2015.");
	$lien -> setLienImage("https://www.webrankinfo.com/dossiers/wp-content/uploads/google-logo-carre-2015-09-400.png") ;
        $manager -> persist($lien);

	    
        $lien = new Lien();
        $lien -> setLienUrl("https://letelegramme.fr");
        $lien -> setLienTitre("Le Télégramme");
        $lien -> setLienDesc("Le Télégramme est un média régional français de Bretagne, dont le siège se trouve à Morlaix. Sa version imprimée est diffusée dans le Finistère, les Côtes-d'Armor, le Morbihan et dans le pays de Saint-Malo. Il emploie 550 personnes, dont près de 220 journalistes.");
        $lien -> setLienImage("https://yt3.googleusercontent.com/YCyEHOYBzDXFSOLHHhVAqglOnqPswJ6xtriVaoruADqolLI2EFOJ2ZO2g5VeAaHgwJ0Ff7IqiiE=s900-c-k-c0x00ffffff-no-rj");
        $manager -> persist($lien);



        $lien = new Lien();
        $lien -> setLienUrl("https://cvtic.unilim.fr/");
        $lien -> setLienTitre("CVTIC");
        $lien -> setLienDesc("Plateforme de cours");
        $lien -> setLienImage("https://scontent-cdg4-3.xx.fbcdn.net/v/t39.30808-1/302289666_529967595599227_9157639086279080850_n.png?stp=dst-png_p120x120&_nc_cat=106&ccb=1-7&_nc_sid=4da83f&_nc_ohc=82CpMgr8VJcAX_DNF1H&_nc_ht=scontent-cdg4-3.xx&oh=00_AfCf0YeAoknc8APTBdpI03346l0mfUhstDSh8ztty8o71g&oe=658ACE52");
        $manager -> persist($lien);


        $lien = new Lien();
        $lien -> setLienUrl("https://duckduckgo.com/");
        $lien -> setLienTitre("Duck Duck Go");
        $lien -> setLienDesc("DuckDuckGo est un moteur de recherche américain qui vise à préserver la vie privée de ses utilisateurs et à leur éviter la bulle de filtres. Sa société éditrice est située à Valley Forge, en Pennsylvanie. Son modèle économique repose sur l'affichage de publicité et l'affiliation");
        $lien -> setLienImage("https://cdn.icon-icons.com/icons2/1488/PNG/512/5364-duckduckgo_102531.png");
        $manager -> persist($lien);


        $lien = new Lien();
        $lien -> setLienUrl("https://framasoft.org/");
        $lien -> setLienTitre("Framasoft 12");
        $lien -> setLienDesc("Framasoft est un réseau d'éducation populaire consacré principalement au logiciel libre. Il est soutenu depuis 2004 par l'association du même nom, après avoir été créé en novembre 2001 par Alexis Kauffmann, Paul Lunetta, et Georges Silva. ");
        $lien -> setLienImage("https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Framasoft_Logo.svg/langfr-220px-Framasoft_Logo.svg.png");
        $manager -> persist($lien);


        $lien = new Lien();
        $lien -> setLienUrl("https://developer.mozilla.org/fr/docs/Learn");
        $lien -> setLienTitre("MDN Web Docs");
        $lien -> setLienDesc("MDN Web Docs, précédemment Mozilla Developer Network et anciennement Mozilla Developer Center, est un dépôt de documentation et une ressource d'apprentissage pour les développeurs web utilisés par Mozilla, Microsoft, Google et Samsung");
        $lien -> setLienImage("https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/mdnwebdocs.svg");
        $manager -> persist($lien);

        $lien = new Lien();
        $lien -> setLienUrl("https://www.wampserver.com/");
        $lien -> setLienTitre("WampServer");
        $lien -> setLienDesc("WampServer est une plateforme de développement Web de type WAMP, permettant de faire fonctionner localement des scripts PHP. WampServer n'est pas en soi un logiciel, mais un environnement comprenant trois serveurs, un interpréteur de script, ainsi que phpMyAdmin pour l'administration Web des bases MySQL");
        $lien -> setLienImage("https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/WampServer-logo.png/220px-WampServer-logo.png");
        $manager -> persist($lien);

        $lien = new Lien();
        $lien -> setLienUrl("https://www.cnil.fr/fr");
        $lien -> setLienTitre("CNIL");
        $lien -> setLienDesc("La Commission nationale de l'informatique et des libertés est une autorité administrative indépendante française.");
        $lien -> setLienImage("https://gnius.esante.gouv.fr/sites/default/files/2020-10/CNIL.jpg");
        $manager -> persist($lien);

        $lien = new Lien();
        $lien -> setLienUrl("https://www.ionos.fr");
        $lien -> setLienTitre("IONOS");
        $lien -> setLienDesc("IONOS by 1&1 fondée en 1988, est une société d’hébergement Web. Elle fait partie du groupe coté en bourse United Internet AG. Elle revendique plus de 13 millions de clients à travers le monde et plus de 19 millions de noms de domaines enregistrés.");
        $lien -> setLienImage("https://european-champions.org/wp-content/uploads/2020/12/Ionos-Lofo-carre%CC%81-570x570.png");
        $manager -> persist($lien);

        $lien = new Lien();
        $lien -> setLienUrl("https://cnes.fr/fr");
        $lien -> setLienTitre("CNES");
        $lien -> setLienDesc("Le Centre national d'études spatiales est un établissement public à caractère industriel et commercial chargé d’élaborer et de proposer au gouvernement français le programme spatial français, puis de le mettre en œuvre. ");
        $lien -> setLienImage("https://cnes.fr/sites/default/files/drupal/201707/image/is_logo_2017_logo_carre_blanc_sur_bleu_transparent.png");
        $manager -> persist($lien);

        $manager->flush();
    }
}
