<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 30/04/2018
 * Time: 11:39
 */
class view
{

    protected $model;

    function load($path="") {
        $p = $path ? $path : $this->path;
        if ($p[0] != '.') {
            $p = "./models/".$p.".php";
        }
        include($p);
        $this->model = new $path();
    }

    function show($path="", $data="") {
        $p = $path ? $path : $this->path;
        if ($p[0] != '.') {
            $p = "./views/".$p.".view.php";
        }
        require './config/config.php';
        include($p);
    }
    function error() {

        $this->show('error/404');

    }
}