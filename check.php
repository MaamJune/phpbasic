<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'MJ' && $password == '1234'){
    echo "Welcome to Dashboard";
    $_SESSION['username'] =$username;
    echo "<br/>";
    echo "Hi..." .$_SESSION['username'];
    header("location: dashboard.php");

}else{
    echo "username or password miss match";
}


?>