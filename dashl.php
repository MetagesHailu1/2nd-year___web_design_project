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
    <title>laboratory-Dashboard</title>


    <style type="text/css">
      

      body{
   background-color:snow;
   height: 1000px;
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






     /* 
      * {
         box-sizing: border-box;
      }
      i {
         display: inline-block;
         width: 30px;
         height: 30px;
         background-image: url(images/icons.png);
         margin-bottom: -5px;
      }
      i.home-icon {
         background-position: top 0 left 0;
      }
      i.envelope-icon {
         background-position: top 0 left -30px;
      }
      i.bell-icon {
         background-position: top 0 left -60px;
      }
      i.dashboard-icon {
         background-position: top 0 left -90px;
      }

*/

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
         background: snow;
        
         

         
      }
      .dd:hover > .dd-content {
         height: 700px;
      }


      .dd-content > button {
         display: block;
         padding: 8px;
         margin-left:20px ;
         text-decoration:none;
         color: red;
         background-color:darkslateblue;
      }

.ccc{
   background-image:url('pim/12.png');
   
   width: 300px;
}



   </style>


</head>
<body>
<?php

include  ("header2.php");

?>



<div class="dd">
      <button class="dd-btn"> laboratory-Dashboard </button>
    <div class="dd-content">

<br><br>

    <h1 class=" text-align:center">  </h1>
    <button  style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;">
     <a href="fetchp88.php" style="color:blue;text-decoration:none;"><b>edit-profile</b></a></button><br>
    

    <button  style="width:100px; background-color:azure; margin-left:50px; border-radius:10px;"> 
    <a href="under.php"style="color:blue; text-decoration:none;"><b>ward room</b></a></button><br>

   
    </div>
   </div>



    <div class="container" style="margin-left:340px;">

    <div style="background-color:pink;"><button style="background-color:blue; width:500px; border-radius:13px;">
     <a href="getlabrequest.php" style="text-decoration:none;"> <h1 style="color:white;"> get lab-request</h1></a></button><br></div>
    <div style="background-color:pink;"> <button style="background-color:blue; width:500px; border-radius:13px;">
     <a href="labresult.php"> <h1 style="color:white;text-decoration:none;">send lab-result</h1></a></button><br></div>

    <!--<div class="something" id="something"><a href="login12"><img src="pim/12.png"></a></div>-->

    </div>





   

     
   </div>
   </div>



</body>
</html>