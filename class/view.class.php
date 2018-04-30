<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 30/04/2018
 * Time: 11:39
 */
class view
{

    function show($path="") {
        $p = $path ? $path : $this->path;
        if ($p[0] != '.') {
            $p = "./views/".$p.".view.php";
        }
        require './config/config.php';
        include($p);
    }

}