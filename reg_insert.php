<?php
    include "config.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];

if(!empty($username) && !empty($password) && !empty($email)){

    $sql= "INSERT INTO users(username, password, email, firstname, lastname, address)
            VALUES('$username', '$password', '$email', '$firstname', '$lastname', '$address') ";

   if(mysqli_query($link, $sql)){
    echo ".....>..registered";
    header ("location: users.php");

   }else{
    echo "failed to register";
   }
  
}else{
    echo "please input username, password and email for registration.";    
}

      mysqli_close();





?>