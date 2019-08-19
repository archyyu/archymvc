<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author Administrator
 */



global $_GPC;
$_W = $_GPC = array();

include('classloader.php');


class Router {
    
    public function __construct() {
        
    }
    
    public function product(){
        global $_GPC;
        $f = $_GPC['f'];
        
        if(isset($f) == false){
            $f = "index";
        }
        
        (new controller\cashier\ProductController())->$f();
        
    }
    
    public function order(){
        global $_GPC;
        $f = $_GPC['f'];
        
        (new controller\cashier\OrderController())->$f();
    }
    
   public function duty(){
       global $_GPC;
       $f = $_GPC['f'];
       
       (new controller\cashier\DutyController())->$f();
   }
   
    
}
$logger = new common\Logger("development.log", common\Logger::INFO);
function logInfo($msg){
    
}

function logError($msg){
    
}

function logInfoWithArr($info,$arr){
    
}


$c = $_GPC['c'];

if(isset($c) == false){
    $c = "product";
}
//echo date('Ymdhis').rand(10000, 99999);
(new Router())->$c();
