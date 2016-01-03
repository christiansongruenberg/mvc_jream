<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 03/01/2016
 * Time: 1:43 PM
 */

class Bootstrap {
    function __construct(){
        $url = $_GET['url'];

        $url = explode('/', rtrim($url));
        //print_r($url);

        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists($file)){
            require_once $file;
        }else{
            require_once 'controllers/error.php';
            $controller = new Error;
            return false;
        }

        $controller = new $url[0];

        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
        }else{
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }
    }
}