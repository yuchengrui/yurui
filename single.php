<?php
/**
* 单例模式
* Date: 2018/12/29
* Author: yurui
*/

class single
{
    public static $Ins;

    final private function __construct(){}

    public function __clone(){
        throw new \Exception('滚，不准克隆');
    }

    public static function getIns(){
        if(empty(self::$Ins)){
            self::$Ins = new self();
        }
        return self::$Ins;
    }
}
