<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/12/13
 * Time: 17:03
 */

namespace app;


class FilterResult
{
    public $state;

    public $des;

    public $data;

    public function __construct($state,$des,$data) {
        $this->state = $state;
        $this->des = $des;
        $this->data = $data;
    }

}