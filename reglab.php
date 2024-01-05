<?php

include("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register lab assi</title>



    <style type="text/css"> 


body{
       
       background-image: url("pim/20.png"); 
      
       background-repeat: no-repeat;
       background-position: fixed;
       background-attachment: center;
       /* keep increasing the value of */
       /* the background-size property */
       /* until the background covers */
       /* the entire page */
       background-size: 100%;
       background-color:;
       height: 130%;
    }


      .center {
         position: relative;
         height: 600px;
         width:500px;
         margin-left: 35%;
         border: 3px solid #173459;
         color: midnightblue;
         border-bottom-color: white;
         border-top-color: white;
         border-left-color: white;
         border-right-color: white;
        background-color: ;
      }
      .center > form {
         position: absolute;
         top: 50%;
         left: 25%;
         transform: translate(-50%, -50%);
      }


      input:link {
         color: orange;
      }
      input:visited {
         color: yellow;
      }
      input:hover {
         color: blue;
      }
      input:active {
         color: red;
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
      
  
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" style="margin-left: 110px;">
     <h1 style="margin-left:120px;"> Lab sign up</h1>
    <b>First name:</b> <br>
     <input type="text" name="F_name" placeholder="First name" style="width: 400px; height: 30px;"><br>
     <b>Last name</b>:<br>
     <input type="text" name="L_name" placeholder="Last name"  style="width: 400px; height: 30px;"><br>
     <b>Specialization</b>:<br>
     <input type="text" name="specialization" placeholder=" Specialization"  style="width: 400px; height: 30px;"><br>
     <b>Email</b>:<br>
     <input type="text" name="email"  placeholder="Email" style="width: 400px; height: 30px;"><br>
    <b>Address</b> :<br>
     <input type="text" name="address" placeholder="Address"  style="width: 400px; height: 30px;"><br>
    <b>Age</b> :<br>
     <input type="text" name="age"  placeholder="Age"  style="width: 400px; height: 30px;"><br>
     <b>Gender</b>:<br>
     <input type="text" name="gender" placeholder="Gender"   style="width: 400px; height: 30px;"><br>
    <b>Password</b> :<br>
     <input type="password" name="password" placeholder="Password"  style="width: 400px; height: 30px;"><br>
    <b>Confirm</b> :<br>
     <input type="password" name="confirm"  placeholder="Confirm" style="width: 400px; height: 30px;"><br>

     <div class="input-cnt">
     <input type="submit" name="submit" value="REGISTER" style="width: 280px; height: 35px; background-color:; margin-left:60px; margin-top:40px;">
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

    $sql="INSERT INTO laboratory(F_name , L_name, specialization, email, address, age, gender, password,confirm )                /**sql   code  insert */                
               VALUES('$F_name','$L_name','$specialization','$email','$address','$age','$gender','$password','$confirm')";       //$hash
    mysqli_query($conn, $sql);


    echo"you are now registered!";
   // include("loginl.php");
    header("Location:loginl.php");
}

       }

else{
    mysqli_close($conn);
}
?>