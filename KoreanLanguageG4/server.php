<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $username="";
        $email="";
        $errors=array();
       $db= mysqli_connect('localhost', 'root','', 'kls');
       if(isset($_POST['register'])){
           $username= mysqli_real_escape_string($_POST['username']);
              $email= mysqli_real_escape_string($_POST['email']);
                 $password_1= mysqli_real_escape_string($_POST['password_1']);
                    $password_2= mysqli_real_escape_string($_POST['password_2']);
       }
       if(empty($username)){
           array_push($errors,"Username is required");
       }
       if(empty($email)){
           array_push($errors,"Email is required");
       }
       if(empty($password_1)){
           array_push($errors,"Password is required");
       }
       if($password_1 != $password_2){
           array_push($errors,"The two passwords do not match");
       }
       
       if(count($errors)==0){
           $password= md5($password_1);
           $sql="INSERT INTO login (username,email,password) values('$username','$email','$password')";
           mysqli_query($db, $sql);
       }
        ?>
    </body>
</html>
