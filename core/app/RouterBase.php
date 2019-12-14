<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/14
 * Time: 9:31
 */

namespace app;

use controller\Controller;

class RouterBase
{
    private $ruleList;

    public function __construct() {
        $this->ruleList = array();
    }


    public function addController($c,Controller $controller){
        $this->ruleList[$c] = $controller;
    }

    public function getController($c){
        if(isset($this->ruleList[$c])){
            return $this->ruleList[$c];
        }
        return null;
    }
}