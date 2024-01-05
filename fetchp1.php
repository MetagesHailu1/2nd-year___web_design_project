<?php
include("database.php");
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
   <button id="addbtn"><a href="regpat1.php" id="add">Add User</a></button>
</div>
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
$sql="Select * from users ";
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
            <button class="upd-btn" ><a href="Update.php? Updateid='.$id.'" class="text-light">Update</a></button>
            <button class="dlete-btn" ><a href="Delete.php? Deleteid='.$id.'" class="text-light2">Delete</a></button>
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