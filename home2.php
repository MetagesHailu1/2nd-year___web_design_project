

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
   background-color: ;
   
}




/*/////////////////////////////image set\\\\\\\\\\\\\\\\\\\\\\\\\\\*/
.image-set{
	width: 100%;
	margin: 100px auto;
   
}
.image-set .image-box{
	position: relative;
	text-align: center;
	display: inline-flex;
   margin-left: 70px;

  
}
.image-set img{
	width: 300px;
	height: auto;
}
.image-set .image-box .image-content{
	position: absolute;
	overflow: hidden;
	bottom: 1%;
	left: 0;
	right: 0;
	width: 100%;
	height: 0%;
	transition: .5s ease;
   margin-left: ;

}
.image-set .image-box .image-content .text{
	position: absolute;
	text-transform: uppercase;
	background: rgba(0,0,0,0.7);
	width: 300px;
	height: auto;
	text-align: center;
	top: 50%;
	left: 37%;
	transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);

}
.image-set .image-box .image-content .text a{
	text-decoration: none;
}
.image-set .image-box .image-content .text h1{
	color: #fff;
	font-family: Nunito;
	font-size: 30px;
}
.image-set .image-box:hover .image-content{
	cursor: pointer;
	height: 25%;
	transition: 0.5s;
}
      


div.mak{
   padding-top: 40px;
       padding-bottom: 40px;
       /*background: cadetblue;*/
       
}



      * {
         box-sizing: border-box;
      }
      html, body {
         margin: 0;
         padding: 0;
      }
      .image-container {
         margin:0px; /* center the image containers */
         width: 70%;
        height: 300px;
         box-shadow: 0 15px 30px rgba(0,0,0,0.30), 0 11px 8px rgba(0,0,0,0.22); /* material box shadow */
         margin-bottom: 20px;
         transition-duration: 1s;
        background-color: lightblue;
        
      }
      .image-container:hover {
         width: 120%;
         
         box-shadow: 0 18px 36px rgba(0,0,0,0.30), 0 14px 11px rgba(0,0,0,0.22);
      }


      /* make the images responsive */
      img {
         width: 50%;
       
      }
      .image-description {
         padding:  15px 15px 15px;
         text-align: horizontally;
      }
    
      /* lightbox stylesheet */
      .lightbox {
         display: table; /* helps us center the lightbox-content */
         transition-duration: 1s; /* duration of the fade in effect */
         
         /* make the lightbox occupy the entire page */
         position: fixed;
         top: -100%; /* hide the lightbox above the top edge */
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.7); /* black with 0.7 opacity */
      }
      .lightbox:target {
         top: 0; /* make the lightbox cover the entire page */
      }
      .lightbox-content {
         display: table-cell;
         vertical-align: middle; /* vertically center */
         text-align: center; /* horizontally center */
      }
      .close {
         /* position the CLOSE button to the top-right corner */
         position: absolute;
         top: 10px;
         right: 10px;
         
         /* style the close button */
         font-size: 20px;
         font-weight: 300;
         text-decoration: none;
         color: white;
      }
      
      /* make the image responsive */
      .lightbox img {
         max-width: 100%;
         height: auto;

        
      }

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
         outline-style: dashed;
         outline-width: 15px;

      }






.meku {
   column-count: 2;
        /* column-rule-style: double;
         column-rule-width: 5px;
         column-rule-color: blueviolet;
         */
}

h1 {
   column-span: all;
   text-align: left;
}


   
       

     



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
         background: ; /* black with 0.7 opacity */
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




      
      
   
   





<div style="margin-top:0px"></div>


 <div class="meku"> 

 <h1 style="margin-left: 80px; color: blueviolet;"> ARBA MINCH REFERAL HOSPITAL</h1>


   <div class="mak">
      

      <div class="image-container" id="container1" style="margin-left:20px;">
         <a href="#image1"><img src="pim/10.png" ></a>
         <h3 style="margin-left: 30px; color: blueviolet;padding-top:120px; padding-left:8px;" >  click on the button <br> for more information</br>  </h3>
         <a href="more.php">
            <button class="btn btn-success my-3"  style="margin-left: 10px; color:blue;  margin-left:100px; margin-top:0px; ">More information</button>
          </a>
          <div cllss="col-mid-3 mx-1 shadow" >
          <!--<img src="pim/10.png style ="width:550px; display: block; margin: 0 auto; height: auto; height: 280px;"style=" border:solid red; width:552px;" >-->
          
           
          
          
   
          
          </div>
      </div>
      <br>


      <div class="lightbox" id="image1">
      <a href="#" class="close">CLOSE</a>
      <div class="lightbox-content">
         <img src="pim/10.png" />
      </div>
   </div>
<br>
<br>
<br>


   <br>      


   <div class="image-container" id="container2" style="margin-top: 30px; margin-left:20px;">
         <a href="#image2"><img src="pim/10.png" ></a>

          <div cllss="col-mid-3 mx-1 shadow">
          <!--<img src="" style ="width:500px; height:300px;" >-->
          <h3 style="margin-left: 30px; color: blueviolet; padding-top:120px; padding-left:8px;;"> Creat Account so that<br> we can take good care of you</br></h3>
          <a href="regpat.php">
            <button class="btn btn-success my-3"  style=" color:blue;margin-left:100px; margin-top:px; padding-left:15px; padding-right:15px;">Creat Account</button>
          </a>
          </div>

          <div class="lightbox" id="image2">
      <a href="#" class="close">CLOSE</a>
      <div class="lightbox-content">
         <img src="pim/11.png" />
      </div>
   </div>
      </br>

   

     
    
         
      
      </div>
   </div>



</div>

<div>
       <div class="image-container" id="container3" style="margin-left:20px;">
            <a href="#image3"><img src="pim/10.png" /></a>

            <div cllss="col-mid-3 mx-1 shadow">
         <!-- <img src="pim/12.png"  style ="width:500px;  margin-top: 0px;  "   ><br> -->
          <h3 style="margin-left: 30px; color: blueviolet;  padding-top:120px; padding-left:8px;">we are employing for doctors</h3><br>
          <a href="apply.php">
            <button class="btn btn-success my-3"  style=" color:blue; margin-left:100px; margin-top:px; padding-left:20px; padding-right:20px; ">Apply Now</button>
          </a>
          </div>
        </div>
 
        </div>

       <div class="lightbox" id="image3">
        <a href="#container3" class="close">CLOSE</a>
        <div class="lightbox-content">
         <img src="pim/12.png" />
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



<section id="image-set-sec">
   
		<div class="image-set">
			<div class="image-box">
				<a style="width: 400px;
				height: 100px;" href=""><img src="pim/10.png"></a>
				<div class="image-content">
					<div class="text"><a href="">
							<h2 style=" color:gainsboro;">Entoto</h2>
						</a></div>
				</div>
			</div>
        
      
			<div class="image-box">
				<a style="width: 400px;
				height: 100px;" href=""><img src="pim/10.png"></a>
				<div class="image-content">
					<div class="text"><a href="">
							<h2 style=" color:gainsboro;">Science Museum</h2>
						</a></div>
				</div>
			</div>

			<div class="image-box">
				<a style="width: 400px;
				height: 100px;" href=""><img src="pim/10.png"></a>
				<div class="image-content">
					<div class="text"><a href="">
							<h2 style=" color:gainsboro;">African Union</h2>
						</a></div>
				</div>
			</div>
			
		</div>

	</section>


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