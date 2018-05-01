<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 01/05/2018
 * Time: 10:03
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        require 'class/' . $class . '.class.php';
    }

}