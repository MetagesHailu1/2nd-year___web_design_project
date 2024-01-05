<?php

include("database.php");
if(isset($_GET['Deleteid'])){
    $id=$_GET['Deleteid'];

$sql="delete from users where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
   // echo"Delete successfully";
   header("Location:fetchp1.php");
}else{
    die(mysqli_error($conn));
}

}


?>