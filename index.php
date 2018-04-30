<?php
// Indique le point de démarrage de l'application
require_once './config/config.php';


if(isset($_GET['controller'])){ // vérifie que l'utilisateur est sur une page
    $page = $_GET['controller'];
    if(file_exists('./controllers/'.$page.'.php'))
        require "./controllers/".$page.".php";
    else
        require "./controllers/".$config['home'].".php";

} else { // Il est à la racine donc on le redirige vers l'accueil
    require "./controllers/".$config['home'].".php";
}




?>
