<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/13
 * Time: 12:00
 */

namespace app;


use core\app\FilterResult;

class App
{

    private $do;

    private $c;


    public function __construct() {

        global $_GPC;

        $_GPC = array();

        $_GPC = array_merge($_GPC, $_POST);
        $_GPC = array_merge($_GPC, $_GET);

        $this->do = $_GPC["do"];
        $this->c = $_GPC["c"];

    }

    public function run(){

        global $_GPC;
        $this->c = str_replace("/","\\",$this->c);

        $controllerName = "controller\\".$this->c."Controller";

        $controller = new $controllerName();

        $filterList = $controller->getFilterList();
        foreach($filterList as $filter){

            $result = $filter->doFilter($controller->getRequest(),$controller->getResponse());
            if($result->state == true){
                continue;
            }
            else{
                die(json_encode($result));
            }

        }

        $list = $controller->getMethodParamDefines($this->do);

        $paramList = array();

        foreach($list as $item){

            if(isset($_GPC[$item->name])){
                $paramList[] = $_GPC[$item->name];
            }
            else{
                $paramList[] = null;
            }

        }

        $result = call_user_func_array(array($controller, $this->do), $paramList);

        if(isset($result)){
            die(json_encode($result));
        }

    }

}