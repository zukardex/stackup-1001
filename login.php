<?php
include 'config.php';
$email=$_POST['email'];
$pass=$_POST['password'];

function userExists($email){
    $sql = "SELECT * FROM users WHERE email = '$email'";  
    $result =mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";

            return true;
        }
}
function authenticate($email, $pass){
    if(userExists($email)){
        //DATABASE FETCHING AND CHECKING NEEDS TO BE ADDED HERE, return false here if email and password dont match
        $sql= "SELECT * FROM users WHERE email='$email' AND password='$pass'"
        $result=mysqli_query($conn, $sql);
        $count =mysqli_num_rows($result);
        if($count==1){
            return true
        }
    }else{
        echo "<h1><center> Password don't match </center></h1>";
        return false;
    }
}


if(authenticate($email,$pass)){
    //login successfull
    echo '<script> document.location="home.html"; </script>';
}

?>