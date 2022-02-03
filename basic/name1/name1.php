<?php

if(isset($_POST["submission"])){
    $input1=$_POST['name'];
    

    class Viewname{
        public function display($a){
            $this->input1=$a;
            echo $a."<br>";

        }
    }
    $result= new Viewname;
    $result->display($input1);
}

?>