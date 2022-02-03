<?php

if(isset($_POST["submission"])){
    $input1=$_POST['num1'];
    $input2=$_POST['num2'];

class Number{

    public function __construct($one,$two){
        $this->input1=$one;
        $this->input2=$two;

    }
    public function maxmin(){
        if($this->input1 == $this->input2){
            echo "Both are Same Number";
        }elseif($this->input1>$this->input2){
            echo $this->input2."is smaller than".$this->input1."<br>";
        }elseif($this->input1<$this->input2){
            echo $this->input2."is gretter than".$this->input1."<br>";
        }
    }

}

class Check extends Number{
    
    public function evenodd(){
        if($this->input1%2==0){
            echo $this->input1."is an even number"."<br>";
        }else{
            echo $this->input1."is an odd number"."<br>";
        }
    }
}

$result = new Check($input1,$input2);
$result->maxmin();
$result->evenodd();
}
?>