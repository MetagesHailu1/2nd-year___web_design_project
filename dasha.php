<?php
include("database.php");
?>


<?php
session_start();

if(!isset($_SESSION['patient_name'])){
    header("Location:home1.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>


    <style type="text/css">

body{
   background-color:powderblue;
    height: 1000px;;
   
}

* {
         box-sizing: border-box;
      }
      html, body {
         margin: 0;
         padding: 0;
      }
      .row::after {
         content: "";
         display: block;
         clear: both;
      }
      .row > div {
         float: left;
         color: white;
         height: 500px;
         padding: 10px;
      }
      .side-nav {
         width: 22%;
         background: #903C56;
      }
      .content {
         width: 40%;
         background: #173459;
         margin-left: 50%;
      }
      .side-nav > ul {
         list-style-type: none;
         padding: 0;
         line-height: 175%;
      }
      .side-nav > ul > li > a {
         text-decoration: none;
         color: white;
      }



    .container {
         display: flex;
         flex-wrap: wrap;
         align-content: flex-start;
         background:slategrey;
         padding: 5px;
         height: 550px;
         margin-right: 37px;
        
      }
      
      .container > div {
         background:darkolivegreen;
         width: 550px;
         line-height: 250px;
         text-align: center;
         margin: 5px;
        /* margin-left: 350px;*/
       
         
      }



      


    .dd {
         position: relative;
         display: inline-block;
        
      }
      .dd-btn {
         padding: 15px;
         text-align: center;
         background: #173459;
         border: none;
         width: 300px;
         color: #f8f9f9;
      }
      .dd-content {
         position: absolute;
         width: 100%;
         box-shadow: 0 18px 36px rgba(0,0,0,0.30), 0 14px 11px rgba(0,0,0,0.22);
         height: 0px;
         transition: height 1s;
         overflow: hidden;
         background-color:;
        
         

         
      }
      .dd:hover > .dd-content {
         height: 600px;
      }


      .dd-content > button {
         display: block;
         padding: 8px;
         margin-left:20px ;
         text-decoration:none;
         color: red;
         background-color:#0076ff;
      }



      /* style the submit button */
      .input-cnt > div > button > a {
         border: none;
         border-radius: 20px;
         outline: none;
         width: 75%;
         margin: 0 auto;
         font-size: 105%;
         padding: 8px;
         color: #0076ff;
         background: #0076ff;
         transition-duration: .5s;
      }
      /* add a hover effect for the submit button */
      .input-cnt > div > button > a :hover {
         color: white;
         background: #0076ff;
      }
      
   

   </style>


</head>
<body>


<?php
include  ("header2.php");

?>
<!--

<div class="row">
      <div class="side-nav">

   -->




      
         <div class="dd">
<button class="dd-btn">  <b>Dashboard</b>  </button>
      <div class="dd-content">
 

<h1 class=" text-align:center">  </h1>
    
<br><br>

    <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;"> 
    <a href="fetchp88.php"style="color:blue; text-decoration:none;"><b>edit profile</b></a></button><br>
<!-- admintable -->
    <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;">
     <a href="fetchp1.php"style="color:blue;text-decoration:none;"><b>patient data</b></a></button><br>
<!-- users table -->
    <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;"> 
    <a href="fetchp2.php"style="color:blue;text-decoration:none;"><b>patientstatus</b></a></button><br>
    <!-- pat_file table -->
    <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;">
     <a href="under.php"style="color:blue;text-decoration:none;"><b>see apply</b></a></button><br>
    
     <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;">
     <a href="under.php.php"style="color:blue;text-decoration:none;"><b>see comments</b></a></button><br>
    
     <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;"> 
    <a href="under.php"style="color:blue;text-decoration:none;"><b>ward room</b></a></button><br>
    
    <button style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;">
     <a href="under.php"style="color:blue;text-decoration:none;text-decoration:none;"><b>emergency</b></a></button><br>

      
   </div>
      
      </div>
     <!-- <div class="content"> -->
      <div class="meti">
      <div class="input-cnt">
      <div class="container" style="margin-left:310px;">
      <div style="background-color:#903C56;width:485px; "> <button  style="background-color:green; width:200px;border-radius: 
      30px;
       padding-right: 20px; "> <a href="regall.php"  style="background-color:darkslateblue ; width:180px; 
       text-decoration:none;">
        <h1 >Docter registration</h1> </a></button><br></div>

      <div  style="background-color:#903C56;width:485px;"> <button style="background-color:green; width:200px; border-radius: 
      30px;
        color: #0076ff;  transition-duration: .5s; :hover-color:white; "> <a href="regall.php" style="text-decoration:none;"> 
         <h1 >  Lab registration</h1></a></button><br> </div>

      <div style="background-color:#903C56;width:485px;"> <button style="background-color:green; width:200px; border-radius: 
      
      30px;"> <a href="regall.php" style="text-decoration:none;"> <h1>  Patient registration</h1></a></button><br> </div>

      <div style="background-color:#903C56;width:485px;"> <button style="background-color:green; width:200px; border-radius: 
      30px;"> <a href="regall.php" style="text-decoration:none;"> <h1>Nurse registration</h1> </a></button><br> </div>
      
   </div>
      </div>
   </div>


    </div>
   </div>
  
  

</body>
</html>

 