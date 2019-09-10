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

$_GPC = array();

$_GPC = array_merge($_GPC, $_POST);
$_GPC = ihtmlspecialchars($_GPC);

include('classloader.php');




class Router {
    
    public function __construct() {
        
    }


    public function __call($name,$arguments){
        echo $name;
	}


	public function duty(){

   	}
   
    
}

echo $_SERVER['SERVER_NAME'];

echo $_SERVER["HTTP_REFERER"];
