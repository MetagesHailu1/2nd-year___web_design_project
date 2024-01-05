<?php
include("database.php");
include("header2.php");
 $id=$_GET['Updateid'];
$sql="select*from admin  where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$F_name=$row['F_name'];
$L_name=$row['L_name'];
$email=$row['email'];
$gender=$row['gender'];
if(isset($_POST['submit'])){
    $F_name=$_POST['F_name'];
    $L_name=$_POST['L_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    
   

$sql="update admin set id=$id,F_name='$F_name',L_name='$L_name',email='$email', gender='$gender' where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
   // echo"update successfully";
   header("Location:fetchp88.php");
}else{
    die(mysqli_query($conn));
}
}

  /*  while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $F_name=$row['F_name'];
        $L_name=$row['L_name'];
        $email=$row['email'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>


    
    <style type="text/css">

body{
  background-color: cornflowerblue;
  height: 1000px;
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
         background: #173459;
         width: 60%;
         height: 600px;
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
         transition-property: height;
        transition-duration: 2s;

      }


      .form-container:over{
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
         border-top-left-radius: 0px;
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
         border-top-right-radius: 0px;
         border-bottom-right-radius: 0px;
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

 </style>

</head>
<body>
    <div>
            <form action="" method="post">
     <h2 style=" margin-left:650px;  color:white;"><b> update<b></h2>

     <div class="form-container">


     <div class="input-cnt">
            <i class="material-icons">F_name</i>
    
     <input type="text" name="F_name"style="  width:850px; height:100px;  " value=<?php echo $F_name;?>><br>
    </div>
    <div class="input-cnt">
            <i class="material-icons">L_name</i>
   
    
     <input type="text" name="L_name"style="  width:850px; height:100px;  " value=<?php echo $L_name;?>><br>
     </div>

     <div class="input-cnt">
            <i class="material-icons">email</i>
    <input type="text" name="email" style="  width:850px; height:100px; " value=<?php echo $email;?>><br>
    </div>
     
    <div class="input-cnt">
            <i class="material-icons">gender</i>
    
     <input type="text" name="gender" style="  width:850px; height:100px; " value=<?php echo $gender;?>><br>
     </div>
     <div class="input-cnt">
     <button type="submit" name="submit">update</button></div>
    </div>

    </form>    
    
</div>
</body>
</html>
