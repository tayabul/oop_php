<?php
if(isset($_POST['submission'])){
    $name=$_POST['employee'];
    $salary =$_POST['salarry'];


    class Employee{

        public function __construct($employeename,$employeesalary){
            $this->name=$employeename;
            $this->salary=$employeesalary;
        }

        public function data(){
            echo $this->name."<br>";
            echo $this->salary."<br>";
        }
    }

    $result = new Employee($name,$salary);
    $result->data();
}
?>