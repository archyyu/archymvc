<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/13
 * Time: 10:52
 */

namespace common;


class Request
{

    private $getParameters;
    private $postParameters;

    public function __construct() {

        global $_GET;
        $this->getParameters = $_GET;

        global $_POST;
        $this->postParameters = $_POST;

    }

    public function get($key,$default){
        if(isset($this->getParameters[$key])){
            return $this->getParameters[$key];
        }
        else{
            if(isset($default)){
                return $default;
            }
        }
    }

    public function post($key,$default){
        if(isset($this->postParameters[$key])){
            return $this->postParameters[$key];
        }
        else{
            if(isset($default)){
                return $default;
            }
        }

    }

    public function input($key,$default){

        if(isset($this->postParameters[$key])){
            return $this->postParameters[$key];
        }
        if(isset($this->getParameters[$key])){
            return $this->getParameters[$key];
        }
        if(isset($default)){
            return $default;
        }

    }

}