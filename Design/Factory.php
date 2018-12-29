<?php
/**
* 工厂模式
* Date: 2018/12/29
* Author: yurui
*/
class a
{
    public function show(){
        echo 'this is a';
    }
}
class b
{
    public function show(){
        echo 'this is b';
    }
}
class Factory
{
    public static function getInstance($type)
    {
        if($type == 1)return new a();
        if($type == 2)return new b();
    }
}

$a = Factory::getInstance(1);
$b = Factory::getInstance(2);
$a->show();
$b->show();