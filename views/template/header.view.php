<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $config['title_site']; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $config['url_site']; ?>assets/css/style.css">
    <script src="<?= $config['url_site']; ?>assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>

    <header>
        <a href="<?= $config['url_site']; ?>"><img src="<?= $config['url_site']; ?>assets/images/logo.png" alt="Logo"></a>
        <nav>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
            <form id="search" action="#" method="post">
                <input type="text">
                <input type="submit">
            </form>
            <a id="search_show"><i class="fas fa-search"></i></a>
            <a href="#"><i class="fas fa-user"></i></a>
        </nav>
    </header>
    <nav id="nav_left">
        <ul>
            <a href=""><li><i class="fas fa-podcast"></i><div class="extend">Multijoueurs</div></li></a>
            <a href=""><li><i class="fas fa-car"></i><div class="extend">Voiture</div></li></a>
            <a href=""><li><i class="fas fa-cogs"></i><div class="extend">Stratégie</div></li></a>
            <a href=""><li><i class="fas fa-desktop"></i><div class="extend">Multi-display</div></li></a>
            <a href=""><li><i class="fas fa-cubes"></i><div class="extend">Construction</div></li></a>
            <a href=""><li><i class="fas fa-fire-extinguisher"></i><div class="extend">Réflexion</div></li></a>
            <a href="<?= $config['url_site']; ?>category/"><li><i class="fas fa-plus"></i><div class="extend">Plus de catégorie</div></li></a>
        </ul>
    </nav>
    <script>
        $('#nav_left ul li').mouseenter(function () {
            $(this).find(".extend").css("display", "inline-block");
        });
        $('#nav_left ul li').mouseleave(function () {
            $(this).find(".extend").css("display", "none");
        });
    </script>