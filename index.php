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


    public function __call($name,$arguments){

    	//

	}


	public function duty(){



       (new controller\cashier\DutyController())->$f();
   	}
   
    
}


$c = $_GPC['c'];

if(isset($c) == false){
    $c = "product";
}

(new Router())->$c();
