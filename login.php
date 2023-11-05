<?php
include 'config.php';
$email=$_POST['email'];
$pass=$_POST['password'];

function userExists($email){
    //DATABASE FETCHING AND CHECKING NEEDS TO BE ADDED HERE, return false here if user dont exist
    //true means user do 
    return true;
}
function authenticate($email, $pass){
    if(userExists($email)){
        //DATABASE FETCHING AND CHECKING NEEDS TO BE ADDED HERE, return false here if email and password dont match
    }else{
        return false;
    }
}


if(authenticate($email,$pass)){
    //login successfull
    echo '<script> document.location="home.html"; </script>';
}

?>