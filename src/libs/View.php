<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 03/01/2016
 * Time: 2:51 PM
 */

class View {

    function __construct(){
        echo 'this is the view';
    }

    public function render($name)
    {
        require_once 'views/' . $name. '.php';
    }
}