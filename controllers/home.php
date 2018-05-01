<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 30/04/2018
 * Time: 11:52
 */

require_once './class/view.class.php';

class home extends view{
    public function __construct($param = null)
    {
        if($param != null && $param) // si le paramètre est différent de null
            if(method_exists($this, $param)) // Si la méthode de $param existe
                $this->$param(); // On la charge
            else
                $this->error(); // Sinon on affiche une error 404!
        else { // Aucun param donc chargement de la page d'accueil

            $this->load("jeux"); // chargement du model
            $data = $this->model->chargerAll();

            $this->show('template/header');
            $this->show('home/home', $data);
            $this->show('template/footer');
        }
    }
}