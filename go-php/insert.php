<?php

$name = $_POST["name"];

include "connact.php";
$stmt = $conn->prepare("INSERT INTO tasks SET name='$name'");
$stmt->execute();

// to add your task in her 

header('Location:select.php');