<?php
session_start();
include("database.php");
//session_start();
//echo$_SESSION['F_name']=$F_name;
//echo"your patient is";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prediagnosis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <style></style>



    <style type="text/css">

body {
         background-image: url("pim/12.png");
         background-repeat: no-repeat;
         background-position: fixed;
         background-attachment: center;
         /* keep increasing the value of */
         /* the background-size property */
         /* until the background covers */
         /* the entire page */
         background-size: 100%;
         height: 130%;
      }

      * {
         box-sizing: border-box;
      }
      html, body {
         margin: 0;
         padding: 0;
      }
      .form-container {
         margin: 20px;
         padding: 15px;
         width: 30%;
         margin-left: 35%;
        
         background: #173459;
         color:white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
      }
      .input-cnt {
         display: flex; /* display the icon and the input in a line */
         margin-bottom: 15px;
      }
      .input-cnt:last-child {
         margin-bottom: 0px;
      }
      .input-cnt > i {
         min-width: 40px; /* set a minimum width for the icon */
         padding: 10px; /* make sure the icon is centered vertically */
         text-align: center; /* horizontally center the icon */
         background:lightgrey;
         border-top-left-radius: 20px;
         border-bottom-left-radius: 20px;
         color: #0076ff;
         cursor: pointer;
      }
      /* change styles when focused */
      .input-cnt:hover > i {
         background: #0076ff;
         color:white;
      }
      /* style the inputs */
      .input-cnt > input[type="text"], .input-cnt > input[type="password"] {
         outline: none;
         border: none;
         padding: 10px;
         border: 1px solid lightgrey;
         border-top-right-radius: 20px;
         border-bottom-right-radius: 20px;
         width: 100%;
         background-color:none;
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
         background:white;
         transition-duration: .5s;
         cursor: pointer;
      }
      /* add a hover effect for the submit button */
      .input-cnt > input[type="submit"]:hover {
         color: white;
         background: #0076ff;
      }














/*

      .center {
         position: relative;
         height: 600px;
         width: 500px;
         border: 3px solid #173459;
         color: midnightblue;
         margin-left: 35%;
         margin-top: 5%;
         border-bottom-color: blue;
         border-top-color: red;
        /* border-left-color: blueviolet;
         border-right-color: blueviolet;
       
        background-color: azure; */
       /*
      }
      .center > form {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
      }

*/
      input:link {
         color: orange;
      }
      input:visited {
         color: yellow;
      }
      input:hover {
         color: red;
      }
      input:active {
         color: gold;
      }





      .box {
         display: table; /* helps us center the box-content */
         /* make the box occupy the entire page */
         position: fixed;
         top: -100%; /* position the lightbox above the top edge */
         left: 0;
         width: 100%;
         height: 100%;
         background: yellowgreen; /* black with 0.7 opacity */
         transition-duration: 2s; /* set the duration of the slide down effect */
      }
      .box:target {
         top: 0; /* cover the entire screen */
      }
      .box-content {
         display: table-cell;
         vertical-align: middle; /* vertically center */
         text-align: center; /* horizontally center */
      }
      .close {
         /* position the CLOSE button to the top-right corner */
         position: absolute;
         top: 20px;
         right: 90px;
         
         /* style the close button */
         font-size: 30px;
         font-weight: 300;
         text-decoration: none;
         color: red;
         
      }
      
      /* make the image responsive */
      img {
         max-width: 100%;
         height: auto;
      }




   






   </style>







    
</head>
<body>

<?php

include  ("header2.php");

?>
<h2>welcome our customer!!</h2>
<?php
 //echo$_SESSION["F_name"]=$F_name;//$_SESSION['username']=$username;
 //echo$_SESSION["password"]=$password;
 //$sql="select id from users  where F_name='$F_name'";
 //$result=mysqli_query($conn,$sql);
 
 
 
 

   echo"patient name :   ";  
      echo $_SESSION["F_name"];
      echo"   ";
      echo $_SESSION["L_name"]."<br>";
     // echo"your patient password is    ";
      
        // echo $_SESSION["password"]."<br>";
         echo" patient id  :  ";
         echo $_SESSION["id"]."<br>";
        // echo"your patient diagnosis_date is    ";
       //  echo $_SESSION["diagnosis_date"];
         ?>




    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">


    <div class="form-container">

     <h1 style="margin-left: 70px;">prediagnosis page</h><br>
     <div class="input-cnt">
         <i class="fa-solid fa-user"></i>
     <input type="text" name="F_name"  placeholder="username"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-solid fa-address-card"></i>
     <input type="text" name="address" placeholder="address"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-brands fa-amilia"></i>
     <input type="text" name="age" placeholder="age"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-brands fa-amilia"></i>
     <input type="text" name="bloodpressure"  placeholder="bloodpressure"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-brands fa-amilia"></i>
     <input type="text" name="heartbeat"  placeholder="heartbeat"><br>
     
     </div>
     <div class="input-cnt">
         <i class="fa-brands fa-amilia"></i>
     <input type="text" name="BMI"  placeholder="BMI"><br>
     </div>
     <div class="input-cnt">
     <input type="submit" name="submit" value="prediagnosis">
     </div>
    </form>
    
    </div>

     
</body>
</html>


         <?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $address=filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    $bloodpressure=filter_input(INPUT_POST, "bloodpressure", FILTER_SANITIZE_SPECIAL_CHARS);
    $heartbeat=filter_input(INPUT_POST, "heartbeat", FILTER_SANITIZE_SPECIAL_CHARS);
    $BMI=filter_input(INPUT_POST, "BMI", FILTER_SANITIZE_SPECIAL_CHARS);
    
    



   // if(empty($F_name)) {
    //    echo"please enter the username";

   // } elseif(empty($password)) {
   //     echo"please enter a password";
   //// } else {
        //$hash=password_hash($password, PASSWORD_DEFAULT);

               //$hash
    



$sql="INSERT INTO pat_file(F_name , address, age, bloodpressure,heartbeat,BMI)                /**sql   code  insert */                
VALUES('$F_name','$address','$age','$bloodpressure','$heartbeat','$BMI')";  
        
      //  $sql="UPDATE pat_file set address='$address' ,age= '$age', bloodpressure='$bloodpressure',
       // heartbeat='$heartbeat' ,BMI='$BMI' where id=$id";   
mysqli_query($conn, $sql);
        echo"your prediagnosis is sent seccessfully!!";
       //  include("loginp.php");
      // header("Location:loginp.php");
    //}

}

else{
    mysqli_close($conn);
}


?>