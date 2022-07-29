<?php

if(isset($_GET['id']) AND isset($_GET['completed'])){
    $id=$_GET["id"];
    $completed=$_GET["completed"];

    if($completed ==1){
        include "connact.php";
        $stmt=$conn->prepare("UPDATE tasks SET completed = 0 WHERE id='$id' ");
        $stmt->execute();
    }else{
        include "connact.php";
        $stmt=$conn->prepare("UPDATE tasks SET completed = 1 WHERE id='$id'");
        $stmt->execute();
    }
    header("location:select.php");
}else{
    header("location:select.php");
}