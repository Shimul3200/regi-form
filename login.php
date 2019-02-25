<?php
   class Login{
       public function logform(){
           $Username=$_POST['uname'];
           $Password=$_POST['pass'];
           if(empty($Username)){
               echo "Empty not accepted";
           }
           elseif(empty($Password)){
               echo "Empty not accepted";
           }
           else{
               echo "Login Successfully Done!";
           }

       }


   }
    $login=new Login();
   $login->logform();
?>