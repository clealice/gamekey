<section id="produit">
    <img src="<?= $config['url_site']; ?>assets/images/products/<?= $data['jeu']->url_image; ?>" alt="<?= $data['jeu']->nom_produit; ?>">
    <p>
        <h3><?= ucfirst($data['jeu']->nom_produit); ?></h3>
        <div class="categories">
        <?php
        foreach ($data['categories'] as $category) {
            echo "<div class='category category1'>".$category->nom_categorie . "</div>";
        }
        ?>
        <?php
        foreach ($data['categories'] as $category) {
            echo "<div class='category category1'>".$category->nom_categorie . "</div>";
        }
        ?>
        </div>
    </p>
</section>