
<?php

include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    


    <style type="text/css">


@keyframes myAnimation {
         from {
            font-size: 35px;
            color: blue;
         }
         to {
            font-size: 40px;
            color: red;
         }
      }
      1 {
         animation-name: myAnimation;
         animation-duration: 2s;
         animation-fill-mode: forwards;
         outline-style: dashed;
         outline-width: px;

      }
   

      * {
         box-sizing: border-box;

      }
      html, body {
         margin: 0;
         padding: 0;
      }
      .image-container {
         margin: 0 auto; /* center the image containers */
         width: 80%;
        height: 400px;
         box-shadow: 0 15px 30px rgba(0,0,0,0.30), 0 11px 8px rgba(0,0,0,0.22); /* material box shadow */
         margin-bottom: 20px;
         transition-duration: 1s;
        
      }
      .image-container:hover {
         width: 90%;
         
         box-shadow: 0 18px 36px rgba(0,0,0,0.30), 0 14px 11px rgba(0,0,0,0.22);
      }
      /* make the images responsive */
      img {
         width: 50%;
       
      }
      .image-description {
         padding:  15px 15px 15px;
         text-align: center;
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
            color: red;
         }
         to {
            font-size: 40px;
            color:blue ;
         }
      }
      h1 {
         animation-name: myAnimation;
         animation-duration: 2s;
         animation-fill-mode: forwards;
      }

/*
.meku {
   column-count: 3;
         column-rule-style: double;
         column-rule-width: 5px;
         column-rule-color: blueviolet;
}

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
      

*{
	font: 1em Roboto;
}
header{
	width: 100%;
	height: 65vh;
	background: url(pim/22.png);
	background-position: center;
	background-size: cover;
}
.header-title{
	position: absolute;
	text-transform: uppercase;
	text-align: center;
	height: 300px;
	font-family: Roboto;
	color: white;
	top: 32%;
	left: 24%;
	transform: (50%, 50%)
}
.page-content{
	width: 100%;
	margin: 0 auto;
}
.apartment-content{
	width: 100%;
	padding: 10px 0 40px 0;
}
.lodge-divs{
	width: 100%;
	display: flex;
}
#hotels .image-box, #bunglows .image-box, #villas .image-box, #rented-houses .image-box{
	position: relative;
	overflow: hidden;

}
#hotels .image-box img, #bunglows .image-box img, #villas .image-box img, #rented-houses .image-box img{
	width: 100%;
	border-radius: 15px;
  	transition: transform 1s;
}
#hotels:hover .image-box img, #bunglows:hover .image-box img, #villas:hover .image-box img, #rented-houses:hover .image-box img{
	transform: scale(1.1);
}
#hotels{
	padding: 20px; 
	margin-bottom: 30px;
	background-color: #d5d9e0;
	border-radius: 20px;
	transition: 0.4s;
}
.lodge-small-divs{
	width: 21%;
	background-color: #d5d9e0;
	border-radius: 20px;
	padding: 20px; 
	transition: 0.4s;
}
#bunglows, #villas{
	margin-right: 30px;
}
.lodge-div-title{
	text-align: center;
	font-family: Roboto;
	font-weight: 700;
	margin-top: 10px;
	font-size: 19px;
	text-transform: uppercase;
	transition: 0.4s;
}
#hotels:hover, .lodge-small-divs:hover{
	box-shadow: 0 6px 8px 4px rgba(0, 0, 0, 0.2), 0 6px 20px 4px rgba(0, 0, 0, 0.19);
	cursor: pointer;
}
#hotels:hover .lodge-div-title, .lodge-small-divs:hover .lodge-div-title{
	color: #1687af;
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
      }
      /* add a hover effect for the submit button */
      .input-cnt > input[type="submit"]:hover {
         color: white;
         background: #0076ff;
      }

      .mek > input, textarea {
         outline: none;
         border: none;
         padding: 10px;
         background: #0076ff;
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
      }
      .mek > input::placeholder, textarea::placeholder {
         color: white;
      }
      /* apply styles when focused */
      .mek > input:focus, textarea:focus {
         background: #173459;
         border-bottom: 5px solid #903C56;
      }


/* style the submit button */
.input-cnt > input[type="button"] {
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
      .input-cnt > input[type="button"]:hover {
         color: white;
         background: #0076ff;
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


<div style="margin-top: 30px;"></div>


 <div class="meku"> 

 <h1 style="margin-left: 80px; color: blueviolet;"> ARBAMINCH GENERAL HOSPITAL</h1><br><br>





 <section class="page-content " style="">

<div style=" background-color:#1687af; height:700px;" >
			<div class="lodge-divs" style="margin-left:20px;  padding-top:30px;">




				<div id="bunglows" class="lodge-small-divs"  style="width:420px;">

					<div class="image-box">
						<img src="pim/23.png" style="height: 250px;">
					</div>
					<div class="lodge-div-title">
				
					</div>
               <h3 style="color:blueviolet;" > 	<br><br><br>Arba Minch General Hospital is a public hospital located 
               <br>in Arba Minch town, Ethiopia. It is one of the general  <br>hospitals in SNNPR region of Gamo Zone.
                It has a bed capacity for 200 patients<br><br> click on the button for more information</br>  
               </h3><br> 
         <a href="more.php">
            <button class="btn btn-success my-3"  style=" background-color:#0076ff; color:white;  
             margin-left:130px; margin-top:40px;padding-top:5px; padding-bottom:5px;border-radius:7px;">
             More information</button>
          </a>
				</div>




				<div id="villas" class="lodge-small-divs" style="width:420px;">

					<div class="image-box">
						<img src="pim/19.png">
					</div>
					<div class="lodge-div-title">
						
					</div>

               <h3 style="color:blueviolet;margin: top 40px;"   >
               <br><br><br> <br> <br><br>Creat Account <br>so that we can take good care of you!!</br>
                </h3><br> 
             <a href="regpat1.php">
               
            <button class="btn btn-success my-3"  style=" background-color:#0076ff; color:white;margin-left:130px;
             margin-top:30px; padding-left:15px;
             padding-right:15px;padding-top:5px; padding-bottom:5px;border-radius:7px;">Creat Account</button>

         </a>
    
				</div>




				<div id="rented-houses" class="lodge-small-divs" style="width:420px;">


					<div class="image-box">
						<img src="pim/11.png">
					</div>
					<div class="lodge-div-title">
						
					</div>
               <h3 style="color:blueviolet;" ><br><br><br><br><br> <br> <br><br>we are employing for doctors!!</br></h3><br>
          <a href="apply.php">
            <button class="btn btn-success my-3"  style="background-color:#0076ff; color:white; margin-left:130px;
             margin-top:40px; padding-left:20px; padding-right:20px; padding-top:5px; padding-bottom:5px;border-radius:7px;">Apply Now</button>
          </a>

				</div>


		</div>
      </div>
      
<section id="image-set-sec">

   
   <div class="image-set">
      <div class="image-box">
         <a style="width: 340px;
         height: 200px;" href=""><img src="pis/37.jpg"></a>
         <div class="image-content">
            <div class="text"><a href="">
                  <h2 style=" color:gainsboro;">ADMIN</h2>
               </a></div>
         </div>
      </div>
     
   
      <div class="image-box">
         <a style="width: 340px;
         height: 100px;" href=""><img src="pim/11.png"></a>
         <div class="image-content">
            <div class="text"><a href="">
                  <h2 style=" color:gainsboro;">DOCTORS</h2>
               </a></div>
         </div>
      </div>

      <div class="image-box">
         <a style="width: 340px;
         height: 100px;" href=""><img src="pim/12.png"></a>
         <div class="image-content">
            <div class="text"><a href="">
                  <h2 style=" color:gainsboro;">HOSPITAL</h2>
               </a></div>
         </div>
      </div>
      
   </div>

</section>




<div class="mek" style="margin-left:50%;">
<h2 style="margin-left:60px;" style="color:">Comment us</h2>
<form action="home1.php">
<!--<input type="text" placeholder="Text goes here..." name="comment"/>-->
<p><textarea  type="text" placeholder="Text goes here..." style="width: 700px; height: 180px" name="comment"></textarea></p>
      <!-- <input type="submit" name="submit" placeholder="Text goes here..." /> -->
  </form>
   

  <div class="input-cnt" style="background:red; width: 180px; margin-left:220px; margin-top:40px;">
            <input type="submit" name="submit" value="Submit"/>
         </div>
         

   </div>
   
          
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
         <img src="pim/23.png" />
         

      </div>
   </div>
<br/>


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



<?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $comment=filter_input(INPUT_POST, "comment", FILTER_SANITIZE_SPECIAL_CHARS);
    
    

    //$hash=password_hash($password, PASSWORD_DEFAULT);

    $sql="INSERT INTO pat_file(comment)                /**sql   code  insert */                
               VALUES('$comment')";       //$hash
    mysqli_query($conn, $sql);
    echo" thanks for your comment!";


   // include("logind.php");
   
}

       
else{
    mysqli_close($conn);
}
?>
</body>
</html>
