<?php
include("database.php");
include("header2.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch</title>
<link rel="stylesheet" href="fetchp12.css">
<style type="text/css">
body{
    background-image: url('pim/11.png');

}</style>
</head>
<body>
    
   <div class="">
   
</div>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
<div class="input-cnt">
         <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="First name" name="F_name" />
         </div>
         
         <div class="input-cnt">
            <input type="submit" name="submit" value="REGISTER" />
         </div>
         


</form>

<div class="tablediv">
<table class="table">
    <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col">F_name</th>
            <th scope="col">L_name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">reg_date1</th>
            <th scope="col">operation</th>
        </tr>
    
    </thead>
    <tbody>
        <?php

$F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
$sql="Select * from admin where F_name='$F_name' ";
$result=mysqli_query($conn,$sql);
if($result) {
    while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $F_name=$row['F_name'];
        $L_name=$row['L_name'];
        $email=$row['email'];
        $gender=$row['gender'];
        $reg_date1=$row['reg_date1'];
        echo' <tr>
            <th scope="row">'.$id.'</th>
                <td>'.$F_name.'</td>
                <td>'.$L_name.'</td>
                <td>'.$email.'</td>
                <td>'.$gender.'</td>
                <td>'.$reg_date1.'</td>
                <td>
            <button class="upd-btn" ><a href="Update3.php? Updateid='.$id.'" class="text-light">Update</a></button>
            <button class="dlete-btn" ><a href="Delete3.php? Deleteid='.$id.'" class="text-light2">Delete</a></button>
        </td>
            
        </tr> ';
    }

}

        
        ?>
        
    </tbody>
</table>
   </div> 
</body>
</html>