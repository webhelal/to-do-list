<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "connact.php";
  $email = $_POST["email"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT * FROM users WHERE email='$email'");
  $stmt->execute();

  $count = $stmt->rowCount(); // return 1 if it's found -- 0 if not found 
  if ($count == 1) {
    $user = $stmt->fetch();

    if (password_verify($password, $user['password'])) {

      $_SESSION['login'] = $email;
      header("location:select.php");
    } else {
      echo "bad connection";
    }
  } else {
    echo "Not Found this email is found";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Document</title>
</head>

<body>

  <div class="container border ps-5 w-50 mt-5">
    <form method="post">

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Login
      </button>
      <a href="users.php">

        <button type="button" class="btn btn-danger ms-5">Signin</button>
      </a>
    </form>

  </div>

</body>

</html>