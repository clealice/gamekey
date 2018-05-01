<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 01/05/2018
 * Time: 11:07
 */

class main_model
{
    // La classe sert uniquement à charger la base

    protected $con;

    public function __construct()
    {
        global $con;
        $this->con = $con;
    }

}