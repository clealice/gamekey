<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 30/04/2018
 * Time: 11:52
 */

require_once './class/view.class.php';

class product extends view{
    public function __construct($param)
    {
        if($param != null) // si le paramètre est différent de null
            if(method_exists($this, $param)) // Si la méthode de $param existe
                $this->$param(); // On la charge
            else
                $this->error(); // Sinon on affiche une error 404!
        else { // Aucun param donc chargement de la page d'accueil

            $this->load("jeux"); // chargement du model
            $data = $this->model->chargerAll();
            $this->redirect_url();
        }
    }

    public function view() {
        if(isset($_GET['getter'])) {
            if($_GET['getter'] == '') // Le paramètre est null
                $this->error();
            else {
                $param = explode("/", $_GET['getter']); // On split le paramètre
                if($param[0] != "null") { // Le paramètre est null
                    if(is_numeric($param[0])) {
                        $this->load("jeux");
                        $data['jeu'] = $this->model->getJeu($param[0]);
                        if($data['jeu'] != null){
                            $data['categories'] = $this->model->getCategories($param[0]);
                            $data['platformes'] = $this->model->getPlatform($param[0]);
                            $this->show("template/header");
                            $this->show("product/home", $data);
                            $this->show("template/footer");

                        } else
                            $this->error();
                    } else
                        $this->error();
                } else
                    $this->error();
            }

        } else
            $this->error();
    }
}