<?php

    if(isset($_POST["submit"])){

        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $email=$_POST["email"];
        $number=$_POST["number"];

        class Details{
            public function display($x,$y,$z,$o){
                $this->first_name=$x;
                $this->last_name=$y;
                $this->email=$z;
                $this->number=$o;

                echo $x."<br>",$y."<br>",$z."<br>",$o;
                
            }
        }
        $show= new Details;
        $show->display($first_name,$last_name,$email,$number);
       


    }

?>