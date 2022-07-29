<?php
session_start();

include "check_login.php";

include 'connact.php';
$stmt = $conn->prepare("SELECT * FROM tasks  ORDER BY id DESC /*ASC*/");
$stmt->execute();
$tasks = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>selectPHP</title>
    <style>
        .task{
            border-radius:15px;
            border-width:9px !important;
        }
    </style>
</head>
<body>
        <div class="container">
             <a href="logout.php"><div class="btn btn-danger">logout</div></a>
            <div class="row">
                <div class="col-6 mx-auto shadow p-5  text-center">
                 <h1 class="p-2 ">To Do List</h1>
                <form action="insert.php" method="post" >
                    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Task Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Tasks...">
                </div>

                    <div class="">
                        <button class="btn btn-primary">submit</button>

                    </div>
                </form>
            </div>
        </div>

        <?php foreach($tasks as $key=> $task){ ?>
            <div class="task shadow p-5 my-5 border-start border-end position-relative
            <?PHP 
            if($task["completed"]== 1){

                echo'bg-danger';   
                echo' opacity-50'; 

            }else{
                
                echo'border-secondary'; 
            }
            ?> 
            
            ">
                <h2><?=($key + 1)."-". $task["name"]?></h2>
                <div class="icons position-absolute top-50 end-0  translate-middle  ">
                    <a href="completed.php?id=<?= $task["id"]?>&completed=<?= $task["completed"]?>" class="text-white">
                        <i class="fa-solid fa-check me-2 p-2 rounded-circle bg-primary"></i>
                    </a>
                    <a href="edit.php?id=<?= $task["id"]?>" class="text-white">
                        <i class="fa-solid fa-edit me-2 p-2 rounded-circle bg-warning"></i>
                    </a>
                    <a href="delete.php?id=<?=$task['id']?>" class="text-white">
                        <i class="fa-solid fa-trash me-2 p-2 rounded-circle bg-danger"></i>
                    </a>

                </div>
            </div>


       <?php } ?>


        <div class="row my-5">
           
        </div>
    </div>


<script src="js/bootstrap.bundle.js"></script>    
</body>
</html>
<?php

