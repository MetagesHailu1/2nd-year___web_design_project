<?php

include("database.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->

    <title>signup page</title>
  </head>
  <body>
    <h1 class="text-center">signup page</h1>
    <div class="container mt-5">
    <form action="signup.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label><br>
    <input type="text" class="form-control" 
    placeholder="Enter username" name="username">
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">password</label><br>
    <input type="password" class="form-control"  placeholder="Enter Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Sign up</button>
</form>
    </div>


  </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
  $username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if(empty($username)) {
      echo"please enter the user name";

  } elseif(empty($password)) {
      echo"please enter a password";
  } else {
  $hash=password_hash($password, PASSWORD_DEFAULT);
  $sql="INSERT INTO users(user, password)
             VALUES('$username','$hash')";
  mysqli_query($conn, $sql);


  echo"you are now registered!";
}

     }
     else{
      mysqli_close($conn);
  }
?>