<?php
include("database.php");
 $idn=$_GET['Updateid'];
$sql="select*from pat_file where idn=$idn";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$F_name=$row['F_name'];
$address=$row['address'];
$age=$row['age'];
$bloodpressure=$row['bloodpressure'];
$heartbeat=$row['heartbeat'];
$BMI=$row['BMI'];
$diagnosis=$row['diagnosis'];
$appointment=$row['appointment'];

if(isset($_POST['submit'])){
    $F_name=$_POST['F_name'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $bloodpressure=$_POST['bloodpressure'];
    $heartbeat=$_POST['heartbeat'];
    $BMI=$_POST['BMI'];
    $diagnosis=$_POST['diagnosis'];
    $appointment=$_POST['appointment'];
    

        

$sql="update pat_file set idn=$idn,F_name='$F_name',address='$address', age='$age',bloodpressure='$bloodpressure',
heartbeat='$heartbeat',BMI='$BMI',diagnosis=' $diagnosis' ,appointment='$appointment'
where idn=$idn";
$result=mysqli_query($conn,$sql);
if($result){
   // echo"update successfully";
   header("Location:fetchp2.php");
}else{
    die(mysqli_query($conn));
}
}

  /*  while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $F_name=$row['F_name'];
        $L_name=$row['L_name'];
        $email=$row['email'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

    <style type="text/css">

body{
  background-color: cornflowerblue;
}


/*
form{

border-style:dotted;
 height:480px; 
 width:1000px;
 background:lavender;
 margin-top: 10px;
 margin-left: 25%;
 transition-property: height;
 transition-duration: 2s;

}

form:hover{
height: 600px;
background:yellowgreen;
}
*/

* {
         box-sizing: border-box;
      }
      html, body {
         margin: 0;
         padding: 0;
      }
      .form-container {
         margin-left:30%;
         padding: 15px;
         background: #173459;
         width: 60%;
         height: 600px;
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
         transition-property: height;
        transition-duration: 2s;

      }


      .form-container:over{
height: 600px;
background:gra;
}


      .input-cnt {
         display: flex; /* display the icon and the input in a line */
         margin-bottom: 15px;
         cursor: pointer;
      }
      .input-cnt:last-child {
         margin-bottom: 0px;
      }
      .input-cnt > i {
         min-width: 40px; /* set a minimum width for the icon */
         padding: 10px; /* make sure the icon is centered vertically */
         text-align: center; /* horizontally center the icon */
         background: lightgrey;
         border-top-left-radius: 0px;
         border-bottom-left-radius: 20px;
         color: #0076ff;
      }
      /* change styles when focused */
      .input-cnt:hover > i {
         background: #0076ff;
         color: white;
      }
      /* style the input and textarea */
      .input-cnt > input[type="text"], .input-cnt > textarea {
         outline: none;
         border: none;
         padding: 10px;
         border: 1px solid lightgrey;
         border-top-right-radius: 0px;
         border-bottom-right-radius: 0px;
         width: 100%;
      }
      /* center textarea icon and increase size */
      .textarea-icon {
         padding: 60px 10px !important; /* top and bottom paddings are set to 60px */
      }
      /* style the submit button */
      .input-cnt > input[type="submit"] {
         border: none;
         border-radius: 20px;
         outline: none;
         width: 75%;
         margin: 0 auto;
         font-size: 105%;
         padding: 8px;
         color: #0076ff;
         background: white;
         transition-duration: .5s;
         cursor: pointer;
      }
      /* add a hover effect for the submit button */
      .input-cnt > input[type="submit"]:hover {
         color: white;
         background: #0076ff;
      }

      .meti > button > a {
        margin-top:30px;  
        border: none;
         border-radius: 10px;
         outline: none;
         width: 55%;
         
         font-size: 105%;
         padding: 8px;
         color: #0076ff;
         background: white;
         transition-duration: .5s; 
      }
  
.meti > button > a :hover{
         color: white;
         background: #0076ff;
      }
  

</style>


    
</head>
<body>
    <div>
            <form action="" method="post">
     <h2 style=" margin-left:610px;  color:black;"> update</h2>

     <div class="form-container">



     <div class="input-cnt">
            <i class="material-icons">F_name</i>
    
     <input type="text" name="F_name"style="  width:850px; height:50px;  " value=<?php echo $F_name;?>><br>
    </div>

    
    <div class="input-cnt">
            <i class="material-icons">address</i>
     
     <input type="text" name="address"style="  width:850px; height:50px;  " value=<?php echo $address;?>><br>
    </div>
     <div class="input-cnt">
            <i class="material-icons">age</i>
     <br>
     <input type="text" name="age" style="  width:850px; height:50px; " value=<?php echo $age;?>><br>
    </div>

     <div class="input-cnt">
            <i class="material-icons">bloodpressure</i>
    
     <br>
     <input type="text" name="bloodpressure" style="  width:850px; height:50px; " value=<?php echo $bloodpressure;?>><br>
    </div>
     <div class="input-cnt">
            <i class="material-icons">heartbeat</i>

     <br>
     <input type="text" name="heartbeat" style="  width:850px; height:50px; " value=<?php echo $heartbeat;?>><br>
    </div>

     <div class="input-cnt">
            <i class="material-icons">BMI</i>


     <br>
     <input type="text" name="BMI" style="  width:850px; height:50px; " value=<?php echo $BMI;?>><br>
    </div>
     <div class="input-cnt">
            <i class="material-icons">diagnosis</i>

     <br>
     <input type="text" name="diagnosis" style="  width:850px; height:50px; " value=<?php echo $diagnosis;?>><br>
     
    </div>
     <div class="input-cnt">
            <i class="material-icons">appointment</i>

     <br>
     <input type="text" name="appointment" style="  width:850px; height:50px; " value=<?php echo $appointment;?>><br>
    </div>
     
    <div class="input-cnt">
     <input type="submit" name="submit" value="Update"></div>
    </div>

    </form>    
      
</div>
</body>
</html>
