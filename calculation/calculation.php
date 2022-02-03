<?php

if(isset($_POST["submission"])){
    $input1=$_POST['num1'];
    $input2=$_POST['num2'];
    $sum;
    $sub;
    $mul;
    $div;

    class Calculator{
        public function addition($input1,$input2){
            echo $sum=$input1+$input2."<br>";
        }

        public function subtraction($a,$b){
            echo $sub=$a-$b."<br>";
        }

        public function multiplication($a,$b){
            echo $mul=$a*$b."<br>";
        }
        // public funtion division($a,$b){
        //     $this->input1=$a;
        //     $this->input2=$b;
        //     echo $sum=$a/$b.'<br/>';
        // }

    }
    $result= new Calculator;
    $result->addition($input1,$input2);
    $result->subtraction($input1,$input2);
    $result->multiplication($input1,$input2);
}

?>