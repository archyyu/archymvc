<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controller;

use controller\Controller;

/**
 * Description of IndexController
 *
 * @author YJP
 */
class IndexController extends Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        echo("index contruct");
    }
    
    public function index(){
        echo "Index Controller index";
        //$this->smarty->display('welcome.tpl');
    }
    
    
}
