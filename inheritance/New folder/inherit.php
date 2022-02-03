<?php
if(isset($_POST['submission'])){
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];

   class parentclass{
      
      public function __construct($num1,$num2){
            $this->num1=$num1;
            $this->num2=$num2;
      }
      public function publicmethod(){
      
         echo $this->num1+$this->num2."<br>" ;
      }
      protected function protectedmethod(){
         echo $this->num1-$this->num2."<br>";
      }
      private function privatemethod(){
         echo $this->num1*$this->num2."<br>" ;
      }
         class secondChild{
            public function secound($privatemethod){
               $this->privatemethod=$privatemethod;
            }
            echo $privatemethod;
         }
   }

   class childclass extends parentclass{
      public function childmethod(){
         $this->protectedmethod();
         //$this->privatemethod(); //this will produce error
      }
   }

$obj=new childclass($num1,$num2);
$obj->publicmethod();
$obj->childmethod();
}
?>
