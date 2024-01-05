<?php
/*$log=0; $success=0;
/*$invalid=0; $users=0;*/

if($_SERVER['REQUEST_METHOD'] =="POST") {
  include("database.php");
    //connect.php
   //$username=$_POST['username'];
    //$password=$_POST['password'];
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    //$hash=password_hash($password, PASSWORD_DEFAULT);

    $sql="Select * from nurse where F_name='$F_name' and  password='$password'";

    //echo"$username    $hash";
    
    $result=mysqli_query($conn,$sql);
 if($result) {
   $num=mysqli_num_rows($result);
  
    if($num>0) {
      echo"login successfuly";
      header("Location:dashn.php");
       /* $log=1;
       session_start();
        $_SESSION['username']=$username;
        header('location:home.php');*/
      } else {
        echo"............invalid";

      }
  }

}      
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

    <title>login nurse</title>


    <style type="text/css">
      .center {
         position: relative;
         height: 600px;
         border: 3px solid #173459;
         color: midnightblue;
         border-bottom-color: blue;
         border-top-color: red;
         border-left-color: blueviolet;
         border-right-color: blueviolet;
        background-color: grey;
      }
      .center > div {
         position: absolute;
         top: 35%;
         left: 25%;
         transform: translate(-50%, -50%);
      }

         </style>



  </head>
  <body>

  <div class="center">


    <h1 class="text-center"   style="color:midnightblue; margin-left: 300px; margin-top: 100px;  ">login to our page</h1>
    <div class="container mt-5">
    <form action="loginn.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">F_name</label><br>
    <input type="text" class="form-control" 
    placeholder="Enter username" name="F_name">
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">password</label><br>
    <input type="password" class="form-control"  placeholder="Enter Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
    </div>

    </div>

  </body>
</html>
