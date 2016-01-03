<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 03/01/2016
 * Time: 12:08 PM
 */

class index extends Controller{

    function __construct(){
        parent::__construct();
//        echo 'we are in index';
    }

    public function other($arg = 'false'){
        echo 'we are in other function <br>';
        echo 'Optional: ' . $arg;
    }
}