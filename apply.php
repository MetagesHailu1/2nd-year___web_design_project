<?php

include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apply now</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <style type="text/css">

body { 
   
background-color: #173459;

   /*
         background-image: url("pim/10.png");
         background-repeat: no-repeat;
         background-position: fixed;
         background-attachment: center;
         
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
         color: white;
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
         background: lightgrey;
         border-top-left-radius: 20px;
         border-bottom-left-radius: 20px;
         color: #0076ff;
         cursor: pointer;
      }
      /* change styles when focused */
      .input-cnt:hover > i {
         background: #0076ff;
         color: white;
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
/*
.meku {
         position: relative;
         height: 600px;
         width: 500px;
         border: 3px solid #173459;
         color: midnightblue;
         margin-left: 35%;
         margin-top: 5%;
         border-bottom-color: blue;
         border-top-color: red;
        /*
         border-left-color: blueviolet;
         border-right-color: blueviolet;
       
        background-color: azure; */
     
             
*/
</style>
</head>
<body>




    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">



<div class="form-container">
<h2 style=" margin-left:120px;">Apply now</h2 >

      <form action="#">
       
         <div class="input-cnt">
         <i class="fa-solid fa-user"></i>
            <i class="material-icons"></i>
            
            <input type="text" placeholder="First name" name="F_name" />
         </div>
         
         <div class="input-cnt">
         <i class="fa-solid fa-user"></i>
            <i class="material-icons"></i>
            <input type="text" placeholder="Last name" name="L_name" />
         </div> 
         
         
         <div class="input-cnt">
         <i class="fa-solid fa-envelope"></i>
            <i class="material-icons"></i>
            <input type="text" placeholder="Email" name="email" />
         </div>
         <div class="input-cnt">
            <i class="fa-solid fa-address-card"></i>
           <i class="material-icons"></i>
            <input type="text" placeholder="Address" name="address" />
         </div>
         <div class="input-cnt">
         <i class="fa-brands fa-amilia"></i>
            <i class="material-icons"></i>
            <input type="text" placeholder="Age" name="age" />
         </div>
         <div class="input-cnt">
         <i class="fa-sharp fa-solid fa-venus-mars"></i>
            <i class="material-icons"></i>
            <input type="text" placeholder="Gender" name="gender" />
         </div>
         <div class="input-cnt">
       <i class="fa-regular fa-pen-field"></i>
            <i class="material-icons"></i>
            <input type="text" placeholder="Field" name="field" />
         </div>
         
         <div class="input-cnt">
         <i class="fa-solid fa-file"></i>
            <i class="material-icons"></i>
            <input type="file" placeholder="File" name="file" />
         </div>



         
         
         <div class="input-cnt">
            <input type="submit"name="submit"  value="Register" />
         </div>
         
      </form>
      
   

       <!--     


     F_name:<br>
     <input type="text" name="F_name"><br>
     L_name:<br>
     <input type="text" name="L_name"><br>
     field:<br>
     <input type="text" name="field"><br>
     file:<br>
     <input type="file" name="file"><br>
     email_address:<br>
     <input type="text" name="email"><br>
     address:<br>
     <input type="text" name="address"><br>
     age:<br>
     <input type="text" name="age"><br>
     gender:<br>
     <input type="text" name="gender"><br>

     password:<br>
     <input type="password" name="password"><br>
     confirm:<br>
     <input type="password" name="confirm"><br>
     
     <input type="submit" name="submit" value="REGISTER">
    
    </form>

            -->
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $L_name=filter_input(INPUT_POST, "L_name", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $address=filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    $gender=filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $field=filter_input(INPUT_POST, "field", FILTER_SANITIZE_SPECIAL_CHARS);
    $file =filter_input(INPUT_POST, "file", FILTER_SANITIZE_SPECIAL_CHARS);

   // $password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
  //  $confirm=filter_input(INPUT_POST, "confirm", FILTER_SANITIZE_SPECIAL_CHARS);



    if(empty($F_name)) {
        echo"please enter the username";

    } /*elseif(empty($password)) {
        echo"please enter a password";
    } */else {
        //$hash=password_hash($password, PASSWORD_DEFAULT);

        $sql="INSERT INTO apply(F_name , L_name,field, file, email, address, age, gender  )                /**sql   code  insert */                
               VALUES('$F_name','$L_name','$field','$file','$email','$address','$age','$gender')";       //$hash
        mysqli_query($conn, $sql);


        echo"thank you for applying!";
        echo"good luck!!!!";
        
       //  include("loginp.php");
    }

}

else{
    mysqli_close($conn);
}
?>
