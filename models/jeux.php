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


}