<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 03/01/2016
 * Time: 2:13 PM
 */

class Controller {

    function __construct(){
        echo 'Main Controller<br>';
        $this->view = new View();
    }
}