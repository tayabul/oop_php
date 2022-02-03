<?php

if(isset($_POST["submission"])){
    $input1=$_POST['num1'];
    $input2=$_POST['num2'];
    $sum;
    $sub;
    $mul;
    $div;

    class Calculator{

        public function __construct($a,$b){
            $this->input1=$a;
            $this->input2=$b;
        }
        public function addition(){
            
            echo $this->input1+$this->input2."<br>";
        }

        public function subtraction(){
            echo $this->input1-$this->input2."<br>";
        }

        public function multiplication(){
            echo $this->input1*$this->input2."<br>";
        }
        public function division(){
            echo $this->input1/$this->input2."<br>";
        }

    }
    $result= new Calculator($input1,$input2);
    $result->addition();
    $result->subtraction();
    $result->multiplication();
    $result->division();

}

?>