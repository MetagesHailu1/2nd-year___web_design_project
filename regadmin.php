<?php

include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register admin</title>



    <style type="text/css">
      body {
         background-image: url("pim/10.png");
         background-repeat: no-repeat;
         background-position: fixed;
         background-attachment: center;
         /* keep increasing the value of */
         /* the background-size property */
         /* until the background covers */
         /* the entire page */
         background-size: 180%;
         height: 130%;

      }


















      .center {
         position: relative;
         height: 600px;
         width: 500px;
         border: 3px solid #173459;
         color: midnightblue;
         margin-left: 35%;
         margin-top: 5%;
         border-color: white;
      
        /* border-left-color: blueviolet;
         border-right-color: blueviolet;
       */
        background-color: lightblue; 
        
      }
      .center > form {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
      }


      input:link {
         color: orange;
         ;
      }
      input:visited {
         color: yellow;
         
      }
      input:hover {
         color:blue;
      }
      input:active {
         color: yellow;

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



   </style>



</head>
<body>








<div class="center">



    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
     <h1 style="margin-left:80px;">Admin own sign up</h1>
    <b> First name:</b><br>
     <input type="text" placeholder="First name" name="First name" style="width: 400px; height: 30px; " ><br>
     <b>Last name:</b><br>
     <input type="text"  placeholder=" Last name" name=" Last name" style="width: 400px; height: 30px;"><br>
     <b>Specialization:</b><br>
     <input type="text" placeholder="Specialization" name="Specialization" style="width: 400px; height: 30px;" ><br>
     <b> Email:</b><br>
     <input type="text" placeholder="Email" name="email" style="width: 400px;  height: 30px;" ><br>
     <b> Address:</b><br>
     <input type="text" placeholder="Address" name="address"  style="width: 400px; height: 30px;" ><br>
     <b> Age:</b><br>
     <input type="text" placeholder="Age" name="age" style="width: 400px; height: 30px;" ><br>
     <b>Gender:</b><br>
     <input type="text" placeholder="Gender"name="gender"  style="width: 400px; height: 30px;" ><br>
     <b> Password:</b><br>
     <input type="password" placeholder="Password"name="password" style="width: 400px; height: 30px;" ><br>
     <b> Confirm:</b><br>
     <input type="password" placeholder="Confirm" name="confirm" style="width: 400px; height: 30px; "><br>
     <br>
     <br>

     <div class="input-cnt">
    <input type="submit" name="submit" value="REGISTER" style="width: 280px; height: 35px; margin-left:60px;   ">
     </div>
    </br>
    </br>
    </form>


</div>


   <br>

<a href="#example"> <B>CLIK HERE TO SEA THE ADMIN PROFILES </B>  </a>
   
   <div class="box" id="example">
      <a href="#" class="close">CLOSE</a>
      <div class="box-content">
         <img src="pim/12.png" />
         <img src="pim/12.png" />
      </div>
   </div>
<br/>

     
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
     $L_name=filter_input(INPUT_POST, "L_name", FILTER_SANITIZE_SPECIAL_CHARS); 
     $specialization=filter_input(INPUT_POST, "specialization", FILTER_SANITIZE_SPECIAL_CHARS);
    $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $address=filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    $gender=filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $confirm=filter_input(INPUT_POST, "confirm", FILTER_SANITIZE_SPECIAL_CHARS);
    
    

    if(empty($F_name)) {
        echo"please enter the user name";

    } elseif(empty($password)) {
        echo"please enter a password";
    } else {
    //$hash=password_hash($password, PASSWORD_DEFAULT);

    $sql="INSERT INTO admin(F_name , L_name, specialization, email, address, age, gender, password,confirm )                /**sql   code  insert */                
               VALUES('$F_name','$L_name','$specialization','$email','$address','$age','$gender','$password','$confirm')";       //$hash
    mysqli_query($conn, $sql);


    echo"you are now registered!";
   // include("logina.php");
    header("Location:logina.php");
}

       }

else{
    mysqli_close($conn);
}
?>