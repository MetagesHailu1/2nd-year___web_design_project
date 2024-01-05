<?php

include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register nurse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    




    <style type="text/css">

body {
         background-image: url("pim/11.png");
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


      .center {
         position: relative;
         height: 600px;
         /*border: 3px solid #173459;*/
         color:midnightblue;
         border-bottom-color: blue;
         border-top-color: red;
         border-left-color: blueviolet;
         border-right-color: blueviolet;
       /* background-color: gray;*/
      }
      .center > form {
         position: absolute;
         top: 50%;
         left: 25%;
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
         margin-left: 40%;
        
         background: #17345;
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




     

   </style>



</head>
<body>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
<div class="center">

<div class="form-container">

     <h1 style="margin-left: 60px;">Nurse sign up</h1>
     <form action="#">


     <div class="input-cnt">
         <i class="fa-solid fa-user"></i>
     <input type="text" placeholder="First name"  name="First name" style="width: 400px; height: 30px;"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-solid fa-user"></i>
     <input type="text" placeholder="Last name"  name="Last name"  style="width: 400px; height: 30px;"><br>
     </div>

     <div class="input-cnt">
     <i class="fa-solid fa-user"></i>
     <input type="text" placeholder="Specialization" name="specialization"  style="width: 400px; height: 30px;"><br>
      </div>


      <div class="input-cnt">
         <i class="fa-solid fa-envelope"></i>
     <input type="text" placeholder="Email" name="email"  style="width: 400px; height: 30px;"><br>
      </div>

     <div class="input-cnt">
         <i class="fa-solid fa-address-card"></i>
     <input type="text" placeholder="Address"  name="address"  style="width: 400px; height: 30px;"><br>
     </div>
     <div class="input-cnt">
         <i class="fa-brands fa-amilia"></i>
     <input type="text" placeholder="Age" name="age"  style="width: 400px; height: 30px;"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-sharp fa-solid fa-venus-mars" ></i>
     <input type="text" placeholder="Gender" name="gender"  style="width: 400px; height: 30px;"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-solid fa-lock"></i>
     <input type="password" placeholder="Password" name="password"  style="width: 400px; height: 30px;"><br>
     </div>

     <div class="input-cnt">
         <i class="fa-solid fa-check"></i>
     <input type="password" placeholder="Confirm" name="confirm"  style="width: 400px; height: 30px;"><br>
     </div>
     
     <div class="input-cnt">
     <input type="submit" name="submit" value="REGISTER" style="width: 180px; height: 35px; margin-top: 30px; ">
     </div>
    
    </form>


    </div> 

     
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

    $sql="INSERT INTO nurse(F_name , L_name, specialization, email, address, age, gender, password,confirm )                /**sql   code  insert */                
               VALUES('$F_name','$L_name','$specialization','$email','$address','$age','$gender','$password','$confirm')";       //$hash
    mysqli_query($conn, $sql);


    echo"you are now registered!";
   // include("loginn.php");
    header("Location:loginn.php");
    
}

       }

else{
    mysqli_close($conn);
}
?>