<?php
if(isset($_POST['submission'])){
    $prefix= $_POST['text1'];
    $prefix2= $_POST['text2'];
    $prefix3= $_POST['text3'];
}


abstract class Greetings{
    abstract public function info();
    public function __construct($a,$b,$c){
    	$this->prefix=$a;
        $this->prefix2=$b;
        $this->prefix3=$c;
    }
}

class Message extends Greetings{
    public function info(){
        echo $this->prefix.$this->prefix2.$this->prefix3;
}
}

$result= new Message($prefix,$prefix2,$prefix3);
$result->info();
?>