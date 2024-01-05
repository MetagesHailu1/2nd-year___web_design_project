
<?php
session_start();
include("database.php");

?>

<?php

include  ("header2.php");

?>



<?php


echo"patient name :   ";  
echo $_SESSION["F_name"];
echo"   ";
echo $_SESSION["L_name"]."<br>";
//echo"your patient password is    ";

   //echo $_SESSION["password"]."<br>";
   echo" patient id  :    ";
   echo $_SESSION["id"]."<br>";
   //echo"your patient diagnosis_date is    ";
   //echo $_SESSION["diagnosis_date"];
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $diagnosis=filter_input(INPUT_POST, "diagnosis", FILTER_SANITIZE_SPECIAL_CHARS);
    $appointment=filter_input(INPUT_POST, "appointment", FILTER_SANITIZE_SPECIAL_CHARS);
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    //include("diagnosis.php");

    
   // if(empty($F_name)) {
        //echo"please enter the username";

   // } elseif(empty($password)) {
      //  echo"please enter a password";
   // } else {
        //$hash=password_hash($password, PASSWORD_DEFAULT);

     //   $sql="update' pat_file'               /**sql   code  insert */                
          //     VALUES('$diagnosis','$appointment')";       //$hash
              $sql="UPDATE pat_file set diagnosis=' $diagnosis' ,  appointment='$appointment'
        where F_name='$F_name'";   
        mysqli_query($conn, $sql);

        echo" diagnosis'$diagnosis'";
    echo"  patient appointment'$appointment'";

       // echo"you are now llll  registered!";
       //  include("loginp.php");
      // header("Location:loginp.php");
   // }

}

else{
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diagnosis patient</title>

    <style type="text/css">

    body{
      background-color: cornflowerblue;
      
      }

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
         background:darksalmon ;
         width: 60%;
         height: 440px;
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
         transition-property: height;
        transition-duration: 2s;

      }


      .form-container:hover{
height: 600px;
background:coral;
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
 <h1 style=" margin-left:670px;  color:black;">welcome our patient!!</h1>

     <div class="form-container">

     
    <div class="input-cnt" style="width:;">
    <i class="material-icons">  username</i>
    <input type="text" name="F_name"><br>
     </div>

  
     <div class="input-cnt">
            <i class="material-icons textarea-icon" style="height:200px;"> diagnosis</i>
     <input type="text" name="diagnosis" style="  width:850px; height:200px;  "><br>
     </div>

    
     <div class="input-cnt">
            <i class="material-icons">appointment</i>
     <input type="date" name="appointment" style="  width:450px; height:50px;  "><br>
     </div>

     <div class="input-cnt">
     <input type="submit" name="submit" value="diagnosis" >
     </div>


     </div>
    </form>
    





    <div class="meti" style="  column-count:3; column-span: all; text-align: center; margin-left:25%;">

    <div style="border: 10px dotted gray;  width:300px; height:100px; background: darksalmon;   ">
     <button 
     style=" margin-top:30px;  
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
     <div style=" border: 10px dotted gray;  width:300px; height:100px; background: darksalmon; ">
       <button
       style=" margin-top:30px;  
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
         "
       ><a href="getlabresult1.php">get labresult</a></button></div><br>
       <div style=" border: 10px dotted gray;  width:300px; height:100px;  background: darksalmon;">
       <button
       style=" margin-top:30px;  
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
         "
       ><a href="prescription1.php">prescription</a></button></div><br>
       
</div>
</body>
</html>






