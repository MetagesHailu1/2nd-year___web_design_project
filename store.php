<?php
$login=0;
$invalid=0;
if($_SERVER["REQUEST_METHOD"] =="POST") {
    include 'database.php';//connect.php
    
    $sql="INSERT INTO users(user, password)
               VALUES('$username','$hash')";
    mysqli_query($conn, $sql);

    $password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql="select* from 'myprodb' where username='$username' and password='$password'";
    $sql="select* from 'myprodb' where username='$username' and password='$password'";

    $result=mysqli_query($conn, $sql);
if($result) {
    $num=mysqli_num_rows($result);
    if($num>0) {
        $login=1;
        session_start();
        $_SESSION['username']=$username;
        header('location:home.php');
    } else {
        $invalid=1;

    }
}

}      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store page</title>
</head>
<body>
    <h1>welcoe</h1>
</body>
</html>




<?php

include("database.php");


?>