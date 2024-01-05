

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">


    <style type="text/css">

body{
   height: ;
}




@keyframes myAnimation {
         from {
            font-size: 15px;
            color: blue;
         }
         to {
            font-size: 40px;
            color: red;
         }
      }
      h1 {
         animation-name: myAnimation;
         animation-duration: 2s;
         animation-fill-mode: forwards;
      }


      .meku{
	width: 100%;
	margin: 100px auto;
  
}
/* 

   column-count: 3; 
        column-rule-style: double;
         column-rule-width: 5px;
         column-rule-color: blueviolet;


h1 {
   column-span: all;
   text-align: left;
}


   */
       

     





      *{
         box-sizing: border-box;
      }


      html,body {
         margin: 0;
         padding: 0;
      }
      body {
         display: flex;
         min-height: 10vh;
         flex-direction: column;
      
      }
      main {
         flex: 1 0 auto;
      }




      .lightbox {
         display: table; /* helps us center the lightbox-content */
         /* make the lightbox occupy the entire page */
         position: fixed;
         top: -100%; /* position the lightbox above the top edge */
         left: 0;
         width: 100%;
         height: 100%;
         background: rebeccapurple; /* black with 0.7 opacity */
         transition-duration: 2s; /* set the duration of the slide down effect */
      }
      .lightbox:target {
         top: 0; /* cover the entire screen */
      }
      .lightbox-content {
         display: table-cell;
         vertical-align: middle; /* vertically center */
         text-align: center; /* horizontally center */
      }
      .close {
         /* position the CLOSE button to the top-right corner */
         position: absolute;
         top: 20px;
         right: 10px;
         
         /* style the close button */
         font-size: 30px;
         font-weight: 300;
         text-decoration: none;
         color: black;
         
      }
      
      /* make the image responsive */
      img {
         max-width: 100%;
         height: auto;
      }


/*
      .col-mid-3 mx-1 shadow{
         border: 100%;
      }
*/


      



   </style>




     



    <style>
        img{
           /* width:300px;*/ border-radius:0px; float:left;
        }
    </style>






</head>
<body>




   


<img src="" alt=""> 
<?php

include  ("header.php");
?>




      
      
   
   





<div style="margin-top:100px"></div>


<div class="meku"> 

<h1 style="margin-left: 80px; color: blueviolet;"> ARBA MINCH REFERAL HOSPITAL</h1>

<div>
   <div>
      <div>


          <div cllss="col-mid-3 mx-1 shadow" >
          <img src="pim/10.png" style ="width:70px; display: block; margin: 0 auto; height: auto; height: 60px;" >
          <br>
           
          <h3 style="margin-top: 50px; color: blueviolet;" >  click on the button for more information  </h3><br> 
          </br>
   
          <a href="more.php">
            <button class="btn btn-success my-3"  style="margin-left: 10px; color:blue;  ">More information</button>
          </a>
          </div>

         
          <div cllss="col-mid-3 mx-1 shadow">
          <img src="pim/11.png" style ="width:70px; height:60px;" >
          <h3 style="margin-top: 50px;  color: blueviolet;"><br>Creat Account so that we can <br>take good care of you</h3><br>
          <a href="regpat.php">
            <button class="btn btn-success my-3"  style="margin-left: 0px; color:blue;  ">Creat Account</button>
          </a>
          </div>

      

 

          <div cllss="col-mid-3 mx-1 shadow">
          <img src="pim/12.png"  style ="width:70px; height: 60; margin-top: 0px;  "   ><br>
          <h3 style="margin-top: 50px;color: blueviolet;">we are employing for doctors</h3><br>
          <a href="apply.php">
            <button class="btn btn-success my-3"  style="margin-left: 0px; color:blue;  ">Apply Now</button>
          </a>
          </div>

          
         
         
      
      </div>
   </div>
</div>


</div>









<br>

<a href="#example" style="text-align:center; color:blue;   "> <B>CLIK HERE TO SEE SOME GALLARYS </B>  </a>
   
   <div class="lightbox" id="example">

 <a href="#" class="close">CLOSE</a>

      <div class="lightbox-content">
         <img src="pim/12.png" />
         <img src="pim/12.png" />
         

      </div>
   </div>
<br/>


<header></header>
<main></main>
<footer style="background: gray; height: 400px; padding: 15px; ;"> 



<div class="w-80"  >
		<div class="footer-box">
 		<h2>Services</h2>
      <br>
 		<a href="#">HEPATOLOGY</a>
      <br/>
      <br>
      <a href="#">MEDICAL DRESSAGE</a>
      <br/>
      <br>
 		<a href="#">LABORATORY</a>
      <br/>
      <br>
 		<a href="#">VACCINATIONS</a>
      <br/>
      <br>
 		<a href="#">WHITENING</a>
      <br/>
 	</div>

    <div class="footer-box">
 		<h2>About Us</h2>
      <br>
 		<a href="#">Company Overview</a>
      <br/>
      <br>
      <a href="#">Management</a>
      <br/>
      <br>
 		<a href="#">Initiatives</a>
      <br/>
      <br>
 		<a href="#"Carrers></a>
      <br/>
     
 		<a href="#">Our Doctors Achieve</a>
      
 	</div>


 	<div class="footer-box">
 		<h2>Contact Us</h2>
      <br>
 		<a href="#">Post a Query</a>
      <br/>
      <br>
      <a href="#">Apollo Clinics</a>
      <br/>
      <br>
 		<a href="#">Reach Hospitals</a>
      <br/>
      <br>
 		<a href="#">Apollo Cradle</a>
      <br/>
     <br>
 		<a href="#">Ask Question</a>
      <br/>
      
 	</div>


    <div class="footer-box">
 		<h2>Facilities</h2>
      <br>
 		<a href="#">HEPATOLOGY</a>
      <br/>
      <br>
      <a href="#">MEDICAL DRESSAGE</a>
      <br/>
      <br>
 		<a href="#">LABORATORY</a>
      <br/>
      <br>
 		<a href="#">VACCINATIONS</a>
      <br/>
     <br>
 		<a href="#">WHITENING</a>
      <br/>
 	</div>

 	
 	
	</div>






</object>




</body>
</html>