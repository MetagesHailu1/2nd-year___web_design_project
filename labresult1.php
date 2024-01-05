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
    <title>lab result</title>

<style type="text/css">



    body{
  background-color: cornflowerblue;
}


form{

    border-style:dotted;
     height:500px; 
     width:1000px;
     background:darkslategray;
     margin-top: 10px;
     margin-left: 25%;
     transition-property: height;
     transition-duration: 2s;
   
}

form:hover{
    height: 600px;
    background:orange;
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







/*.meti{
    transition-property: width;
    transition-duration: 2s;
}
.meti:hover{
    height: 5px;
}*/

</style>

    
    
</head>
<body>

<h2></h2>
<h1 style=" margin-left:510px;  color:blue;">Labresult Form</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
   
    
<div class="meku" style="margin-left:40%;">
username:<br>
     <input type="text" name="F_name" style="border-radius:10px;"><br>
     .....r1_RBC:<br>
     <input type="text" name="h1" style="border-radius:10px;"><br>
     .....r2_cbc:<br>
     <input type="text" name="h2"><br>
     ....r3_GBA:<br>
     <input type="text" name="h3"><br>
     .....r4_:<br>
     <input type="text" name="h4"><br>
     ....r5_:<br>
     <input type="text" name="h5"><br>
     ......r6_:<br>
     <input type="text" name="h6"><br>
     .....r7_:<br>
     <input type="text" name="h7"><br>
     ......r8:<br>
     <input type="text" name="h8"><br>
     ......r9:<br>
     <input type="text" name="h9"><br>
     .....r10:<br>
     <input type="text" name="h10"><br>
     ......r11:<br>
     <input type="text" name="h11"><br>

     <br>
     <div class="input-cnt">
     <input type="submit" name="submit" value="Send Labresult" style="margin-left: 0px; width:180px;">
     </div>
</br>
     
     </div>
    
    </form>



    <div class="meti" style="column-count:3;column-span: all; text-align: center; margin-left:20%;">


    <div style=" border: solid black ;  width:300px; height:100px; background: darkslategray;  ">
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
         "><a href="diagnosis1.php" >diagnosis1</a></button></div><br>
     <div style=" border: solid black ;  width:300px; height:100px; background:darkslategray;  ">
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
         "><a href="labrequest1.php">labrequest1</a></button></div><br>
       <div style=" border: solid black ;  width:300px; height:100px; background:darkslategray;  ">
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
          "><a href="prescription1.php">prescription1</a></button></div><br>
</div>

     
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $h1=filter_input(INPUT_POST, "h1", FILTER_SANITIZE_SPECIAL_CHARS);
    $h2=filter_input(INPUT_POST, "h2", FILTER_SANITIZE_SPECIAL_CHARS);
    $h3=filter_input(INPUT_POST, "h3", FILTER_SANITIZE_SPECIAL_CHARS);
    $h4=filter_input(INPUT_POST, "h4", FILTER_SANITIZE_SPECIAL_CHARS);
    $h5=filter_input(INPUT_POST, "h5", FILTER_SANITIZE_SPECIAL_CHARS);
    $h6=filter_input(INPUT_POST, "h6", FILTER_SANITIZE_SPECIAL_CHARS);
    $h7=filter_input(INPUT_POST, "h7", FILTER_SANITIZE_SPECIAL_CHARS);
    $h8=filter_input(INPUT_POST, "h8", FILTER_SANITIZE_SPECIAL_CHARS);
    $h9=filter_input(INPUT_POST, "h9", FILTER_SANITIZE_SPECIAL_CHARS);
    $h10=filter_input(INPUT_POST, "h10", FILTER_SANITIZE_SPECIAL_CHARS);
    $h11=filter_input(INPUT_POST, "h11", FILTER_SANITIZE_SPECIAL_CHARS);
    



   // if(empty($F_name)) {
    //    echo"please enter the username";

   // } elseif(empty($password)) {
   //     echo"please enter a password";
   //// } else {
        //$hash=password_hash($password, PASSWORD_DEFAULT);


        $sql="UPDATE pat_file set h1='$h1',h2='$h2',h3='$h3',h4='$h4',h5='$h5',h6='$h6',h7='$h7',
        h8='$h8',h9='$h9',h10='$h10',h11='$h11'    
        where F_name='$F_name'";  
           //$hash
        mysqli_query($conn, $sql);


        echo"your labresult is sent seccessfully!!";

        echo"your labresult is sent seccessfully!!";
       //  include("loginp.php");
      // header("Location:loginp.php");
    //}

}

else{
    mysqli_close($conn);
}
?>