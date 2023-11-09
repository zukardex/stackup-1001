<?php
include 'credentials.php';

// Initialize the $conn variable
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

$email = $_POST['email'];
$pass = $_POST['password'];

function userExists($email, $conn) {
    $sql = "SELECT * FROM users WHERE email = '" . $email . "';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function authenticate($email, $pass, $conn) {
    if (userExists($email, $conn)) {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

if (authenticate($email, $pass, $conn)) {
    // Login successful
    echo '<script> document.location = "home.html"; </script>';
}

$conn->close();

?>
