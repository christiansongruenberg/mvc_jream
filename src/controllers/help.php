<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 03/01/2016
 * Time: 12:20 PM
 */

class help extends Controller{

    function __construct(){
        parent::__construct();
        echo 'we are in help';
    }

    public function other($arg = 'false'){
        echo 'we are in other function <br>';
        echo 'Optional: ' . $arg;

        require 'models/help_model.php';
        $model = new Help_Model();
    }
}