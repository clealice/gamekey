<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 01/05/2018
 * Time: 10:56
 */
include "main_model.php";

class jeux extends main_model
{

    private $jeux = array();
    protected $con;


    public function chargerAll() {
        return $this->con->get_rows("SELECT * FROM Jeu ORDER BY reference_jeu LIMIT 0, 12", true);
    }

    public function chargerData($last) {
        return $this->con->get_rows("SELECT * FROM Jeu WHERE reference_jeu > $last ORDER BY reference_jeu LIMIT 0,12");
    }

    public function getJeu($id) {
        return $this->con->get_row("SELECT * FROM Jeu WHERE reference_jeu = $id");
    }

    public function getCategories($id) {
        return $this->con->get_rows("SELECT Categorie.nom_categorie FROM Categorie
                                     INNER JOIN Concerne_jeu_categorie ON Categorie.nom_categorie = Concerne_jeu_categorie.nom_categorie
                                     WHERE Concerne_jeu_categorie.reference_jeu = $id");
    }

    public function getPlatform($id) {

        return $this->con->get_rows("SELECT Platforme.nom_platforme FROM Platforme
                                     INNER JOIN Concerne_jeu_platforme ON Platforme.nom_platforme = Concerne_jeu_platforme.nom_platforme
                                     WHERE Concerne_jeu_platforme.reference_jeu = $id");
    }


}