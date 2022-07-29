<?php

IF($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $id=$_POST['id'];
    $name=$_POST["name"];

    include "connact.php";
    $stmt = $conn->prepare("UPDATE tasks SET name='$name' WHERE id='$id'");
    $stmt->execute();


    header("location:select.php");
}