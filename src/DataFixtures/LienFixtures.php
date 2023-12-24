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


        $lien = new Lien();
        $lien -> setLienUrl("https://www.legifrance.gouv.fr/");
        $lien -> setLienTitre("Legifrance");
        $lien -> setLienDesc("Légifrance est le site web officiel du gouvernement français pour la diffusion des textes législatifs et réglementaires et des décisions de justice des cours suprêmes et d'appel de droit français");
        $lien -> setLienImage("https://avatars.githubusercontent.com/u/2491972?v=4");
        $manager -> persist($lien);

	    
        $lien = new Lien();
        $lien -> setLienUrl("https://www.reddit.com/");
        $lien -> setLienTitre("Reddit");
        $lien -> setLienDesc("Reddit est un site web communautaire américain de discussion et d’actualités sociales. Les liens les plus appréciés du moment se trouvent affichés en page d’accueil par le vote des utilisateurs. Fondé en 2005, Reddit contient alors surtout du contenu sur la programmation et la science.");
        $lien -> setLienImage("https://upload.wikimedia.org/wikipedia/en/thumb/b/bd/Reddit_Logo_Icon.svg/220px-Reddit_Logo_Icon.svg.png");
        $manager -> persist($lien);

	    
        $lien = new Lien();
        $lien -> setLienUrl("https://www.lemonde.fr/");
        $lien -> setLienTitre("Le Monde");
        $lien -> setLienDesc("Le Monde est un quotidien français de l'après-midi. C'est la principale publication du groupe Le Monde et a fait état d'un tirage moyen de 479 243 exemplaires par numéro en 2022, dont environ 40 000 ont été vendus à l'étranger.");
        $lien -> setLienImage("https://wiwibloggs.com/wp-content/uploads/2020/09/le-monde-logo.jpg");
        $manager -> persist($lien);

	    
        $lien = new Lien();
        $lien -> setLienUrl("https://discord.com/");
        $lien -> setLienTitre("Discord");
        $lien -> setLienDesc("Discord est un logiciel propriétaire gratuit de VoIP et de messagerie instantanée.");
        $lien -> setLienImage("https://upload.wikimedia.org/wikipedia/fr/thumb/4/4f/Discord_Logo_sans_texte.svg/71px-Discord_Logo_sans_texte.svg.png?20210527094128");
        $manager -> persist($lien);

	    
        $lien = new Lien();
        $lien -> setLienUrl("https://www.bing.com/");
        $lien -> setLienTitre("Bing");
        $lien -> setLienDesc("Microsoft Bing, est un moteur de recherche élaboré par la société Microsoft.");
        $lien -> setLienImage("https://c.clc2l.com/c/thumbnail75webp/t/m/i/microsoft-bing-bN1i_W.png");
        $manager -> persist($lien);

	    
        $lien = new Lien();
        $lien -> setLienUrl("https://www.deepl.com/translator");
        $lien -> setLienTitre("Deepl");
        $lien -> setLienDesc("DeepL est un service de traduction automatique en ligne de la société DeepL GmbH, lancé le 28 août 2017 par l'équipe de Linguee.");
        $lien -> setLienImage("https://cdn.upmarket.co/staticfiles/2023/9/png/7035995994d48bb591b39bd2c3eaccf2");
        $manager -> persist($lien);

	$lien = new Lien();
        $lien -> setLienUrl("https://fr.wikipedia.org");
        $lien -> setLienTitre("Wikipédia");
        $lien -> setLienDesc("Un projet d’encyclopédie collective en ligne, universelle, multilingue et fonctionnant sur le principe du wiki.");
        $lien -> setLienImage("https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Wikipedia-logo-v2.svg/800px-Wikipedia-logo-v2.svg.png");
        $manager -> persist($lien);

	$lien = new Lien();
        $lien -> setLienUrl("https://www.onisep.fr");
        $lien -> setLienTitre("Onisep");
        $lien -> setLienDesc("Onisep produit et diffuse toute l'information sur les formations et les métiers.");
        $lien -> setLienImage("https://www.mlfmonde.org/wp-content/uploads/2015/12/onisep.jpg");
        $manager -> persist($lien);

	$lien = new Lien();
        $lien -> setLienUrl("https://www.ldlc.com");
        $lien -> setLienTitre("LDLC");
        $lien -> setLienDesc("N°1 du high-tech et du matériel informatique, Élu Service Client de l'Année.");
        $lien -> setLienImage("https://my-mw.fr/wp-content/uploads/2022/04/logo-ldlc-1.png");
        $manager -> persist($lien);

	    	$lien = new Lien();
        $lien -> setLienUrl("https://www.rueducommerce.fr");
        $lien -> setLienTitre("Rue du commerce");
        $lien -> setLienDesc("Une entreprise française de grande distribution, acteur du secteur du commerce en ligne en France.");
        $lien -> setLienImage("https://img.over-blog-kiwi.com/1/49/54/19/20191108/ob_974020_carrefour-rue-du-commerce-00.png#width=400&height=400");
        $manager -> persist($lien);

	    	$lien = new Lien();
        $lien -> setLienUrl("https://wordpress.com/fr/");
        $lien -> setLienTitre("Wordpress");
        $lien -> setLienDesc("Créez et développez un site internet avec WordPress.");
        $lien -> setLienImage("https://cdn.pixabay.com/photo/2022/01/16/17/24/wordpress-6942722_1280.png");
        $manager -> persist($lien);

	    	$lien = new Lien();
        $lien -> setLienUrl("https://www.php.net/manual/fr/index.php");
        $lien -> setLienTitre("Support PHP");
        $lien -> setLienDesc("Aide et assistance pour PHP en ligne");
        $lien -> setLienImage("https://www.svgrepo.com/show/303208/php-1-logo.svg");
        $manager -> persist($lien);

	    	$lien = new Lien();
        $lien -> setLienUrl("https://www.https://validator.w3.org/.net/manual/fr/index.php");
        $lien -> setLienTitre("Validator w3");
        $lien -> setLienDesc("Le Markup Validation Service est un validateur du World Wide Web Consortium qui permet aux utilisateurs Internet de vérifier les documents HTML et XHTML pré-HTML5 pour un balisage bien formé par rapport à une définition de type de document.");
        $lien -> setLienImage("https://5.imimg.com/data5/SELLER/Default/2022/12/HG/AS/VE/78455159/w3c-validation-service.PNG");
        $manager -> persist($lien);

	    	$lien = new Lien();
        $lien -> setLienUrl("https://www.postman.com/");
        $lien -> setLienTitre("Postman");
        $lien -> setLienDesc("Postman est une application permettant de tester des API.");
        $lien -> setLienImage("https://logowik.com/content/uploads/images/postman-api-platform6643.logowik.com.webp");
        $manager -> persist($lien);
        
        	    	$lien = new Lien();
        $lien -> setLienUrl("https://www.w3schools.com/");
        $lien -> setLienTitre("W3 School");
        $lien -> setLienDesc("W3Schools est un site web destiné à l'apprentissage en ligne des technologies web1. Son contenu inclut des didacticiels et des références relatives aux langages et frameworks");
        $lien -> setLienImage("https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/W3Schools_logo.svg/langfr-150px-W3Schools_logo.svg.png");
        $manager -> persist($lien);
    
        $manager->flush();
    }
}
