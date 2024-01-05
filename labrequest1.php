<?php
session_start();
include("database.php");
include  ("header2.php");
echo" patient name :    ";  
echo $_SESSION["F_name"];
echo"   ";
echo $_SESSION["L_name"]."<br>";
//echo"your patient password is    ";

  // echo $_SESSION["password"]."<br>";
   echo"patient id  :    ";
   echo $_SESSION["id"]."<br>";
   //echo"your patient diagnosis_date is    ";
// echo $_SESSION["diagnosis_date"];
?>
<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab request</title>



    <style type="text/css">

body{
    background-color: cornflowerblue;
}


form{
    border-style:dotted;
     height:500px; 
     width:1000px;
     background:#0076ff;
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





</style>



    
</head>
<body>


<h1 style=" margin-left:610px;  color:black;">Labrequest Form</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >
    


     <!-- <div class="meku" style="margin-left:40%;img img src="> -->
     username:<br>
     <input type="text" name="F_name"><br>
     RBs:
     <input type="checkbox" name="r1"><br>
     CBC:
     <input type="checkbox" name="r2"><br>
     RGB:
     <input type="checkbox" name="r3"><br>
     STOOL:
     <input type="checkbox" name="r4"><br>
     HCG:
     <input type="checkbox" name="r5"><br>
     FBS:
     <input type="checkbox" name="r6"><br>
     BF:
     <input type="checkbox" name="r7"><br>
     U/A:
     <input type="checkbox" name="r8"><br>
     W/F:
     <input type="checkbox" name="r9"><br>
     WIDIAL:
     <input type="checkbox" name="r10"><br>
     H.PYLORI:
     <input type="checkbox" name="r11"><br>
     <br>

     <div class="input-cnt">
     <input type="submit" name="submit" value="Send Labrequest" style="margin-left: 0px; width:180px;">
     </div>
</br>
     </div>


    </form>

    <div class="meti" style="column-count:3;column-span: all; text-align: center; margin-left:20%;">
    
    <div style=" border: solid black ;  width:300px; height:100px; background:#0076ff; ">
     <button 
     style="
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
         "><a href="diagnosis1.php">diagnosis</a></button></div><br>
     <div style=" border: solid black ;  width:300px; height:100px; background:#0076ff; ">
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
       <div style=" border: solid black ;  width:300px; height:100px; background:#0076ff; ">
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
         "><a href="prescription1.php">prescription</a></button></div><br>

    </div>

     
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $r1=filter_input(INPUT_POST, "r1", FILTER_SANITIZE_SPECIAL_CHARS);
    $r2=filter_input(INPUT_POST, "r2", FILTER_SANITIZE_SPECIAL_CHARS);
    $r3=filter_input(INPUT_POST, "r3", FILTER_SANITIZE_SPECIAL_CHARS);
    $r4=filter_input(INPUT_POST, "r4", FILTER_SANITIZE_SPECIAL_CHARS);
    $r5=filter_input(INPUT_POST, "r5", FILTER_SANITIZE_SPECIAL_CHARS);
    $r6=filter_input(INPUT_POST, "r6", FILTER_SANITIZE_SPECIAL_CHARS);
    $r7=filter_input(INPUT_POST, "r7", FILTER_SANITIZE_SPECIAL_CHARS);
    $r8=filter_input(INPUT_POST, "r8", FILTER_SANITIZE_SPECIAL_CHARS);
    $r9=filter_input(INPUT_POST, "r9", FILTER_SANITIZE_SPECIAL_CHARS);
    $r10=filter_input(INPUT_POST, "r10", FILTER_SANITIZE_SPECIAL_CHARS);
    $r11=filter_input(INPUT_POST, "r11", FILTER_SANITIZE_SPECIAL_CHARS);
    



   // if(empty($F_name)) {
    //    echo"please enter the username";

   // } elseif(empty($password)) {
   //     echo"please enter a password";
   //// } else {
        //$hash=password_hash($password, PASSWORD_DEFAULT);
        $sql="UPDATE pat_file set r1='$r1',r2='$r2',r3='$r3',r4='$r4',r5='$r5',r6='$r6',r7='$r7',
        r8='$r8',r9='$r9',r10='$r10',r11='$r11'    
        where F_name='$F_name'";  

mysqli_query($conn, $sql);
        echo"your lab request is sent seccessfully!!";
       //  include("loginp.php");
      // header("Location:loginp.php");
    //}

}

else{
    mysqli_close($conn);
}
?>