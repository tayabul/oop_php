<?php

class A{
    public $a = 10;

    public function student(){
        echo $this->a.'<br/>';
    }
}

class B extends A{
    public $b = 20;

    public function Data(){
        echo $this->b;
    }

}

$B =new B();
$B->student();
$B->Data();