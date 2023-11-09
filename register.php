<?php
include 'config.php';
$email=$_POST['email'];
$pass=$_POST['password'];

function userExists($email){
    //DATABASE FETCHING AND CHECKING NEEDS TO BE ADDED HERE, return false here if user already exist
    $sql="select * from users where email='$email'";
    $result=mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count==1){
        echo "<h1><center> This email is already registered</center></h1>";
        return true;
    }
    return false;
}

function addUser($email, $pass){
    if(!(userExists($email))){

        //DATABASE INSERTION NEEDS TO BE ADDED HERE, return false here if user already exist
        $sql = "INSERT INTO users (email,pass) VALUES ('$email','$pass' )";
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("Account created successfully");</script>';

        
            echo '<script> document.location="login_signup.html"; </script>';
        }

    }else{
        echo '<script> alert("USER ALREADY EXISTS"); document.location="login_signup.html";</script>';

    }
}

?>