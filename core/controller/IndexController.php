<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controller;


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Description of IndexController
 *
 * @author YJP
 */
class IndexController extends Controller{
    //put your code here

    private $log;

    public function __construct() {
        parent::__construct();
        $this->log = new Logger("IndexController");
        $this->log->pushHandler(new StreamHandler("info.log",Logger::INFO));
    }
    
    public function index(){
        $this->log->info("IndexController index");
        //$this->smarty->display('welcome.tpl');
    }
    
    
}
