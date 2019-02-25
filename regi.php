<?php

class Regi{
    public function rform(){
        $Firstname=$_POST['firstname'] ;
        $Lastname=$_POST['lastname'] ;
        $Username=$_POST['username'] ;
        $Email=$_POST['email'] ;
        $Password=$_POST['pass'] ;
        if(empty($Firstname)){
            echo "Empty not accepted";
        }
        elseif(empty($Lastname)){
            echo "Empty not accepted";
        }
        elseif(empty($Username)){
            echo "Empty not accepted";
        }
        elseif(empty($Email)){
            echo "Empty not accepted";
        }
        elseif(empty($Password)){
            echo "Empty not accepted";
        }

        else{
            echo "Registration Successfull.";
            echo "</br>";
            echo "</br>";
            echo "First name is:" .$Firstname;
            echo "</br>";
            echo "First name is:" .$Lastname;
            echo "</br>";
            echo "First name is:" .$Username;
            echo "</br>";
            echo "First name is:" .$Email;
            echo "</br>";
            echo "First name is:" .$Password;
        }
    }

}
$regi=new Regi();
$regi->rform();
?>