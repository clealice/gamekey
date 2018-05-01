<?php
// Indique le point de démarrage de l'application
require_once './config/config.php';

require_once './class/autoloader.class.php';
Autoloader::register();

$con = new Base();

function defaut() {
    global $config;
    require "./controllers/" . $config['home'] . ".php";
    $page = new $config['home']();
}
function error_404() {
    global $config;
    $vue = new view();
    $vue->error();
}

if(isset($_GET['controller'])){ // vérifie que l'utilisateur est sur une page
    $page = $_GET['controller']; // récupération du controller
    $param = null; // Set param à null
    if(file_exists('./controllers/'.$page.'.php')) { // Vérifie que le controller existe
        require "./controllers/".$page.".php"; // Charge le controller
        if(isset($_GET['page'])) // Si une methode est appel
            $param = $_GET['page']; // Set param a la methode
        $page = new $page($param); // Création de la page
    } else // La page est introuvable 404
        error_404();

} else // Il est à la racine donc on le redirige vers l'accueil
    defaut();




?>
