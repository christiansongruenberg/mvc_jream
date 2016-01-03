<?php
/**
 * Created by PhpStorm.
 * User: Christianson
 * Date: 03/01/2016
 * Time: 1:51 PM
 */

class Error extends Controller {
    function __construct(){
        parent::__construct();
        echo 'This is an error';

        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }
}