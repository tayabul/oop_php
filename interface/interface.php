<?php
if(isset($_POST['submission'])){
    $input1=$_POST['num1'];
    $input2=$_POST['num2'];
    $input3=$_POST['num3'];
}

interface Pondit{
    public function student();
}

class Square implements Pondit{

    public function __construct($one){
        $this->input1=$one;
        
    }

    public function student(){
        echo $this->input1*$this->input1."<br>";
    }
}

class Cube implements Pondit{
    public function __construct($one,$two,$three){
        $this->input1=$one;
        $this->input2=$two;
        $this->input3=$three;
    }

    public function student(){
        echo $this->input1*$this->input2*$this->input3."<br>";
    }
}

$result =new Square($input1,$input2,$input3);
$result->student();

$answer=new Cube($input1,$input2,$input3);
$answer->student();
?>