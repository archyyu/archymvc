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
$_GPC = array_merge($_GPC, $_GET);
//$_GPC = ihtmlspecialchars($_GPC);


require 'setting.php';
require 'classloader.php';
require 'vendor/autoload.php';





$do = $_GPC["do"];

$c = $_GPC["c"];

$c = str_replace("/","\\",$c);

$controllerName = "controller\\".$c."Controller";

$controller = new $controllerName();
$controller->$do();

