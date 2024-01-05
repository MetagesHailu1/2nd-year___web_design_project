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



      body{
   background-color:antiquewhite;
   height: 1000px;
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








</style>




     









</head>
<body>








</body>


<div class="lodge-divs" >
         
<div id="bunglows" class="lodge-small-divs"  style="margin-left:32%; margin-top:40px; width:550px;:height: 300px; ">
   <div class="image-box" style="background-color: #173459; width:510px; height: 600px;">
   <div class="lodge-div-title">
               <br><h2>Login</h2></br>

         <div class="form-container">

<form action="dashd.php" method="post">

<div class="input-cnt">
<i class="fa-solid fa-user"></i>
<input type="text"  placeholder="Email or username" name="email" required/>
</div>

<div class="input-cnt">
<i class="fa-solid fa-lock"></i>
<input type="password" placeholder="Password" name="password" required/>
</div>

<div class="input-cnt">
<input type="submit" value="Login" />
</div>

</form>

</div>


           </div>
      
   <img src="pim/19.png">
           </div>

    </div>
    </body>