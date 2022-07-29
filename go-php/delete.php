<?php

if(isset($_GET["id"])){
    $id=$_GET['id'];
    include "connact.php";
    $stmt=$conn->prepare("DELETE FROM tasks WHERE id='$id'");
    $stmt->execute();
    header("location:select.php");
}