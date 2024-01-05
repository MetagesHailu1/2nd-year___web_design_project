<?php

include("database.php");
if(isset($_GET['Deleteid'])){
    $id=$_GET['Deleteid'];

$sql="delete from admin where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
   // echo"Delete successfully";
   header("Location:fetchp88.php");
}else{
    die(mysqli_error($conn));
}

}


?>