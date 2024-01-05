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
    background-size:100%;
}</style>
</head>
<body>

   <div class="container">
   

<table class="table">
    <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col">F_name</th>
            <th scope="col">address</th>
            <th scope="col">age</th>
            <th scope="col">bloodpressure</th>
            <th scope="col">heartbeat</th>
            <th scope="col">BMI</th>
            <th scope="col">diagnosis</th>
            <th scope="col">appointment</th>
            <th scope="col">operation</th>
        </tr>
        
    </thead>
    <tbody>
        <?php
$sql="Select * from pat_file ";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $idn=$row['idn'];
        $F_name=$row['F_name'];
        $address=$row['address'];
        $age=$row['age'];
        $bloodpressure=$row['bloodpressure'];
        $heartbeat=$row['heartbeat'];
        $BMI=$row['BMI'];

        $diagnosis=$row['diagnosis'];

        $appointment=$row['appointment'];


        echo' <tr>
            <th scope="row">'.$idn.'</th>
                <td>'.$F_name.'</td>
                <td>'.$address.'</td>
                <td>'.$age.'</td>
                <td>'.$bloodpressure.'</td>
                <td>'.$heartbeat.'</td>
                <td>'.$BMI.'</td>
                <td>'.$diagnosis.'</td>
                <td>'.$appointment.'</td>
                <td>
            <button class="upd-btn"><a href="Update2.php? Updateid='.$idn.'" class="text-light">Update</a></button>
            <button class="dlete-btn"><a href="Delete2.php? Deleteid='.$idn.'" class="text-light2">Delete</a></button>
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