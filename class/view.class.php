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
        global $config;
        $p = $path ? $path : $this->path;
        if ($p[0] != '.') {
            $p = "./models/".$p.".php";
        }
        include($p);
        $this->model = new $path();
    }

    function show($path="", $data="") {
        global $config;
        $p = $path ? $path : $this->path;
        if ($p[0] != '.') {
            $p = "./views/".$p.".view.php";
        }
        include($p);
    }
    function error() {

        $this->show('template/header');
        $this->show('error/404');
        $this->show('template/footer');

    }

    function redirect_url($url = "") {
        global $config;
        header('Location: '.$config['url_site'].$url);
    }
}