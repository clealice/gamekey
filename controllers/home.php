<?php
/**
 * Created by PhpStorm.
 * User: Link
 * Date: 30/04/2018
 * Time: 11:52
 */

require_once './class/view.class.php';

$view = new view();

$view->show('template/header');
$view->show('home/home');
$view->show('template/footer');