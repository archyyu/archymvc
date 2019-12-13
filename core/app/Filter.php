<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/13
 * Time: 16:25
 */

namespace app;


use common\Request;
use common\Response;

class Filter
{

    public function __construct() {

    }

    public function doFilter(Request $request,Response $response) {
        return new FilterResult(true,"success",null);
    }

}