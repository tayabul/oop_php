<?php
    if(isset($_POST['submit'])){
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        $c=$_POST['num3'];
    }

    interface Student{
        public function Display();
    }

    class Rajib implements Student{
        public function __construct($x,$y,$z){
            $this->a=$x;
            $this->b=$y;
            $this->c=$z;
        }

        public function Display(){
            echo $this->a/$this->b.'<br/>';
            echo $this->c*$this->a.'<br/>';
        }
    }

    $admin= new Rajib($a,$b,$c);
    $admin-> Display();