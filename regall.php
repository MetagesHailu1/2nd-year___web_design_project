<?php

include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    



    <style type="text/css">

      body{
       
         background-image: url("pim/2.png"); 
        
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

  /* property | duration */
  /*.transition {
         transition: margin-top 2s linear  , width 1s ease-in, height 1s ease-out;
      }
      div {
         width: 100px;
         height: 100px;
         background: black;
         color: white;
         margin-top: 0px;
      }

      div:hover {
         margin-top: 200px;
         width: 200px;
         height: 200px;
      }
*/
      .center {
         position: relative;

         height: 675px;
         width: 35%;
         margin-left: 30%;
         margin-top: 0px;
       /*  border: 7px  dashed #173459; */
         color: midnightblue;
         border-bottom-color: blue;
         border-top-color: red;
         border-left-color: blueviolet;
         border-right-color: blueviolet;
        background-color:lightgray;

        
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
        
         background:plum;
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
      




   </style>




</head>
<body>



<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" style="margin-left:; ">
    <div class="input-cnt">
    
    


<div class="form-container">


<h2 style=" margin-left:120px;"> sign up</h2 >
<form action="#">
 
   <div class="input-cnt">
      <i class="material-icons">person</i>
      <input type="text" placeholder="First name" name="F_name"  />
   </div>

   
   <div class="input-cnt">
   <i class="material-icons">person</i>
      <input type="text" placeholder="Last name"name="L_name" />
   </div>

   <div class="input-cnt">
      <i class="material-icons">username</i>
      <input type="text" placeholder="username" name="username" />
   </div>
   
   
   <div class="input-cnt">
      <i class="material-icons">role</i>
      <input type="text" placeholder="role" name="role" />
   </div>
   
   <div class="input-cnt">
      <i class="material-icons">email</i>
      <input type="text" placeholder="Email" name="email" />
   </div>
   <div class="input-cnt">
      <i class="material-icons">address</i>
      <input type="text" placeholder="address" name="address" />
   </div>
   <div class="input-cnt">
      <i class="material-icons">age</i>
      <input type="text" placeholder="age" name="age" />
   </div>

   <div class="input-cnt">
      <i class="material-icons"> gender</i>
      <input type="text" placeholder=" gender" name=" gender" />
   </div>

   <div class="input-cnt">
      <i class="material-icons">lock</i>
      <input type="password" placeholder="Password" name="password" />
   </div>
   
   <div class="input-cnt">
      <i class="material-icons">lock</i>
      <input type="password" placeholder="confirm" name="confirm" />
   </div>
   
   <div class="input-cnt">
      <input type="submit" name="submit" value="REGISTER" />
   </div>
   
</form>

</div>
<!--

<div class="center">



    
    
     <input type="text" placeholder="First name" name="First name"  style="width: 400px; height: 30px;"><br>
     </div>
     L_name:<br>
     <input type="text"  placeholder="Last name" name="Last name"  style="width: 400px; height: 30px;"><br>
     specialization:<br>
     <input type="text" name="specialization"  style="width: 400px; height: 30px;"><br>
     email_address:<br>
     <input type="text" name="email"  style="width: 400px; height: 30px;"><br>
     address:<br>
     <input type="text" name="address"  style="width: 400px; height: 30px;"><br>
     age:<br>
     <input type="text" name="age"  style="width: 400px; height: 30px;"><br>
     gender:<br>
     <input type="text" name="gender"  style="width: 400px; height: 30px;"><br>
     password:<br>
     <input type="password" name="password"  style="width: 400px; height: 30px;"><br>
     confirm:<br>
     <input type="password" name="confirm"  style="width: 400px; height: 30px;"><br>
     
     <br>
     <input type="submit" name="submit" value="REGISTER" style="width: 180px; height: 35px; ">
   </br>
    </div>
  
    
    </form>


</div>
   -->
     
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
     $L_name=filter_input(INPUT_POST, "L_name", FILTER_SANITIZE_SPECIAL_CHARS); 
     $username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
     $role=filter_input(INPUT_POST, "role", FILTER_SANITIZE_SPECIAL_CHARS);
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

    $sql="INSERT INTO admin(F_name , L_name,username,role, email, address, age, gender, password,confirm )                /**sql   code  insert */                
               VALUES('$F_name','$L_name','$username','$role','$email','$address','$age','$gender','$password','$confirm')";       //$hash
    mysqli_query($conn, $sql);


    echo"you are now registered!";
   // include("logind.php");
   //header("Location:login11.php");
}

       }

else{
    mysqli_close($conn);
}
?>