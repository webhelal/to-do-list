<?php
if($_SERVER['REQUEST_METHOD']== "POST"){


    include "connact.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hash_password = password_hash($password , PASSWORD_BCRYPT);
   $stmt = $conn->prepare("INSERT INTO users SET email='$email', password='$hash_password' ");
   $stmt->execute();
   header("location:users.php");

 
}