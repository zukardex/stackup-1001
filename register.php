<?php
include 'config.php';
$email=$_POST['email'];
$pass=$_POST['password'];

function userExists($email, $pass){
    //DATABASE FETCHING AND CHECKING NEEDS TO BE ADDED HERE, return false here if user already exist
    return false;
}

function addUser($email, $pass){
    if(!(userExists)){

        //DATABASE INSERTION NEEDS TO BE ADDED HERE, return false here if user already exist

        //IF INSERTION SUCCESSFUL, un-comment the code below:
        /*
            echo '<script> document.location="login_signup.html"; </script>';
        */
    }else{
        echo '<script> alert("USER ALREADY EXISTS");</script>';
    }
}

?>