<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/13
 * Time: 17:00
 */

namespace filter;


use app\Filter;
use app\FilterResult;
use common\Request;
use common\Response;

class Md5Filter extends Filter
{

    public function __construct() {
        parent::__construct();
    }

    public function doFilter(Request $request, Response $response) {

        $time = $request->input("time");
        $token = $request->input("token");

        if($time == null || $token == null){
            return new FilterResult(false,"token校验失败",null);
        }

        if($time == $token){
            return parent::doFilter($request,$response);
        }
        else{
            return new FilterResult(false,"token校验失败",null);
        }

    }

}