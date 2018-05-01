<div class="section">
    Tous les produits
</div>
<section id="articles_infinie">
    <?php
        $i = 1;
        foreach ($data as $jeu) :
    ?>
    <article id="<?=$jeu['reference_jeu']; ?>">
        <a href="#">
            <img src="<?= $config['url_site']; ?>assets/images/products/<?= $jeu['url_image']; ?>" alt="">
            <div class="hover<?=$i;?>"></div>
            <h3><?= $jeu['nom_produit']; ?></h3>
            <p><?= $jeu['descriptif_court_jeu']; ?></p>
        </a>
    </article>
    <?php
        ($i == 1) ? $i = 2 : $i = 1;
        endforeach;
    ?>
</section>
<div id="loader"><img src="./assets/images/loader.gif" alt="">
</div>