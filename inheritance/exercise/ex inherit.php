<?php
if(isset($_POST['submission'])){
    $value1=$_POST['num1'];
    $value2=$_POST['num2'];


    class input{
        public function __construct($a,$b){
            $this->value1=$a;
            $this->value2=$b;
        }
        public function maxnumber(){
            if($this->value1 == $this->value2){
                echo "This Value are both same Number.";
            }elseif($this->value1<$this->value2){
                echo $this->value2." Is Gretter than ".$this->value1."<br/>";
            }elseif($this->value1>$this->value2){
                echo $this->value2." Is Less than ".$this->value1."<br/>";
            }
        }

    }
    class inherit extends input{
        public function evenodd(){
            if($this->value2%2 == 0){
                echo $this->value2. " This is Even Number";
            }else{
                echo $this->value2." This is Odd Number";
            }
        }
    }

    $result= new inherit($value1,$value2);
    $result-> maxnumber();
    $result-> evenodd();

}


?>