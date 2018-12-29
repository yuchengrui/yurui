<?php
/**
* 责任链模式
* Date: 2018/12/29
* Author: yurui
*/
class Base
{
    public function __construct($p)
    {
        if($this->power == $p){
            $this->doThing();
        }else{
            if($this->top == null){
                echo '你是要上天？';
                return false;
            }
            new $this->top($p);
        }
    }
}

class A extends Base
{
    public $top = 'B';
    public $power = 1;
    public function doThing(){
        echo 'A: i can do this';
    }
}
class B extends Base
{
    public $top = 'C';
    public $power = 2;
    public function doThing(){
        echo 'B: i can do this';
    }
}
class C extends Base
{
    public $top = null;
    public $power = 3;
    public function doThing(){
        echo 'C: i can do this';
    }
}

new A($_GET['id']);