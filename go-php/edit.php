<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    include "connact.php";

    $stmt=$conn->prepare("SELECT * FROM tasks WHERE id='$id'");
    $stmt->execute();

    $task = $stmt->fetch();
}
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
    <title>Document</title>
</head>
<body>
    <div class="continer">
           <div class="row my-5 text-center">
            <div class="col-6 mx-auto shadow p-5">


                <form action="update.php" method="post" >
                    <div class="mb-3">
                        <input type="hidden" name='id' value=<?=$task['id']?>>

            <label  class="form-label fs-1">Edit Your Task</label>
            <input type="text" value="<?=$task['name']?>" name="name" class="form-control" placeholder="Enter Your Edit">
            </div>

                    <div class="">
                        <button class="btn btn-primary">submit</button>

                    </div>
                </form>



            </div>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>