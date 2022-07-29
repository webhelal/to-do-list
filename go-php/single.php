<?php
include "connact.php";

$id=$_GET["id"];


$stmt= $conn->prepare("SELECT * FROM tasks WHERE id = '$id' ");

$stmt ->execute();
$task = $stmt->fetch();

print_r($task);
