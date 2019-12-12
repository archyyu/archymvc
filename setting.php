<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/10
 * Time: 14:46
 */

$config = array();

$config['db']['master']['host'] = '192.168.0.120';
$config['db']['master']['username'] = 'root';
$config['db']['master']['password'] = 'Sc@2019!';
$config['db']['master']['port'] = '3306';
$config['db']['master']['database'] = 'we7';
$config['db']['master']['charset'] = 'utf8';
$config['db']['master']['pconnect'] = 0;
$config['db']['master']['tablepre'] = 'ims_';


$config['setting']['redis']['server'] = '192.168.0.120';
$config['setting']['redis']['port'] = 6379;
$config['setting']['redis']['pconnect'] = 0;
$config['setting']['redis']['timeout'] = 30;
$config['setting']['redis']['session'] = 0;
$config['setting']['redis']['password'] = "Sc@2019!";


global $_W;

$_W["config"] = $config;