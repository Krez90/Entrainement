<?php 
$username = "bibi";
$password = "123";



if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == $username && $_POST['password'] == $password){
        session_start();
        $_SESSION['user'] = $username;
        echo "Success";
    }
    else{
        echo "Failed";
    }
}