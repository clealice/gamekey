<?php


require_once './config/config.php';

require_once './class/autoloader.class.php';
Autoloader::register();

$con = new Base();

require './models/jeux.php';
$jeux = new jeux();
$les_jeux = $jeux->chargerData($_GET['lastid']);
        $i = 1;
        foreach ($les_jeux as $jeu) :
            echo
            "
            <article id=\"".$jeu->reference_jeu."\">
                <a href=\"#\">
                    <img src=\"".$config['url_site']."assets/images/products/".$jeu->url_image."\" alt=\"\">
                    <div class=\"hover$i\"></div>
                    <h3>".$jeu->nom_produit."</h3>
                    <p>".$jeu->descriptif_court_jeu."</p>
                </a>
            </article>
            ";
            ($i == 1) ? $i = 2 : $i = 1;
        endforeach;
    ?>