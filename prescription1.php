<?php

include("database.php");


include  ("header2.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prescription</title>

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
         height: 480px;
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
         transition-property: height;
        transition-duration: 2s;

      }


      .form-container:hover{
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
         border-top-left-radius: 20px;
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
         border-top-right-radius: 20px;
         border-bottom-right-radius: 20px;
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


<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
     <h2></h2>
     <h1 style=" margin-left:610px;  color:black;">Prescription Form</h1>


   <div class="form-container">

      <form action="prescription1">
       
         <div class="input-cnt">
            <i class="material-icons">person</i>
            <input type="text" placeholder="Name" name="F_name" />
         </div>
         
         
         <div class="input-cnt">
            <i class="material-icons textarea-icon" style="height:300px;">prescription</i>
            <textarea placeholder="Your prescription here..." name="prescription"></textarea>
         </div>
         
         <div class="input-cnt">
            <input type="submit" name="submit" value="Submit"/>
         </div>
         
      </form>
   </div>
<!--
 

     <div style=" border: solid black ;border-width: 250ppx;  width:900px; height:430px; margin-left:25%; background-color: slateblue; border-style: solid dashed solid dashed;">
      
     <input type="text" name="prescription" style="   width:750px; height:300px;   margin-left:70px;"><br>
     
     
     <br>  <input  type="submit" name="submit" value="REGISTER"style="margin-left:430px;  background-color:blue;;"> </br>
     
     </div><br>
  
     </form>
  -->
  <div class="meti" style="  column-count:3; column-span: all; text-align: center; margin-left:25%;">

    <div style="border: 10px dotted gray;  width:300px; height:100px; background: #173459;   ">
     <button style="
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
         cursor: pointer; 
         "><a href="diagnosis1.php" >diagnosis</a></button></div><br>
 <div style=" border: 10px dotted gray;  width:300px; height:100px; background: #173459; ">
       <button style="
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
         cursor: pointer;

         "><a href="getlabresult1.php">get labresult</a></button></div><br>
     <div style=" border: 10px dotted gray;  width:300px; height:100px;  background: #173459;">
       <button style="
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
         cursor: pointer;
         "><a href="labrequest1.php">send labrequest</a></button></div><br>
       
</div>

  
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
   $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $prescription=filter_input(INPUT_POST, "prescription", FILTER_SANITIZE_SPECIAL_CHARS);
    



   // if(empty($F_name)) {
     //   echo"please enter the username";

    //} elseif(empty($password)) {
// echo"please enter a password";
    //} else {
        //$hash=password_hash($password, PASSWORD_DEFAULT);


        $sql="UPDATE pat_file set prescription='$prescription'
         where F_name='$F_name'";   
        //$hash
        mysqli_query($conn, $sql);

      //  echo"you are now registered!";
       //  include("loginp.php");
      // header("Location:loginp.php");
   // }

}

else{
    mysqli_close($conn);
}
?>