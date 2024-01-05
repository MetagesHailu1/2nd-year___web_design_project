
<?php
session_start();
include("database.php");
//session_start();
//echo$_SESSION['F_name']=$F_name;
//echo"your patient is";


?>
<?php
 //echo$_SESSION["F_name"]=$F_name;//$_SESSION['username']=$username;
 //echo$_SESSION["password"]=$password;
 //$sql="select id from users  where F_name='$F_name'";
 //$result=mysqli_query($conn,$sql);
 
 
 
 

   echo" patient name :    ";  
      echo $_SESSION["F_name"];
      echo"   ";
      echo $_SESSION["L_name"]."<br>";
      //echo"your patient password is    ";
      
         //echo $_SESSION["password"]."<br>";
         echo" patient id  :    ";
         echo $_SESSION["id"]."<br>";
        // echo"your patient diagnosis_date is    ";
       //  echo $_SESSION["diagnosis_date"];
         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getlabresult1</title>


    

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
         background:darkolivegreen ;
         width: 68%;
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
         height: 50px;
         
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
  


      table {
         border-collapse: collapse;
         color: white;
         font-family: sans-serif;
      }
      table, th, td {
         border: 1px solid black;
         text-align: center;
      }
      th, td {
         padding: 5px;
      }
      /* selects odd rows */
      tr:nth-child(odd) {
         background: #173459;
      
      }
      /* selects even rows */
      tr:nth-child(even) {
         background:darkgoldenrod;
         height: 70px;
      }



</style>




    <style></style>
    
</head>
<body>

<li class="nav-item"><a href="home.php" class="nav-link text-white">log out</a></li>



    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
     <h2 style=" margin-left:510px;  color:blue;">getlabresult1</h2>


     <div class="form-container">


     <div class="input-cnt" style="width:;">
    <i class="material-icons"> Username</i>
     <input type="text" placeholder="username" name="F_name"><br>
     </div>

     <div class="input-cnt">
     <input type="submit" name="submit" value="getlabresult" style="width:150px; margin-left: 0;">

     </div>

     <table>
      <thead>
         <tr>
         <th scope="col"> id</th>
         <th scope="col">F_name</th>
            <th scope="col">diagnosis</th>
            <th scope="col">address</th>
            <th scope="col"> RBS</th>
            <th scope="col"> CBC</th>
            
            <th scope="col"> RGB</th>
            <th scope="col" style="width:50px;">stool </th>
            <th scope="col">HCG</th>
            <th scope="col">FBS</th>
            <th scope="col"> BF</th>
            <th scope="col"> U/A</th>
            <th scope="col"> W/F</th>
            <th scope="col"> WIDIAL</th>
            <th scope="col"> H.PYLORI</th>

            <th scope="col">operation</th><br>
         </tr>
      </thead>
      <tbody>
         <tr>
            
            
          
         </tr>
         <tr>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
         </tr>
         <tr>
         <th scope="col"> r1</th>
            <th scope="col">F_name</th>
            <th scope="col">diagnosis</th>
            <th scope="col">address</th>
            <th scope="col"> RBS</th>
            <th scope="col"> CBC</th>
            
            <th scope="col"> RGB</th>
            <th scope="col"> stool</th>
            <th scope="col"> HCG</th>
            <th scope="col"> FBS</th>
            <th scope="col"> BF</th>
            <th scope="col"> U/A</th>
            <th scope="col"> W/F</th>
            <th scope="col"> WIDIAL</th>
            <th scope="col"> H.PYLORI</th>
            <th scope="col">operation</th>
         </tr>
         <tr>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
            <td>  </td>
            <td> </td>
            <td> </td>
         </tr>
        
      </tbody>
   </table>


    
<table class="table">
    <thead>
        <tr>
           
        </tr>
        
   
        
    </thead>
    
    <tbody>
   
        <?php
        if($_SERVER['REQUEST_METHOD'] =="POST") {
            $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
            
$sql="Select * from pat_file where  F_name='$F_name' ";
$result=mysqli_query($conn,$sql);
if($result) {
    $row=mysqli_fetch_assoc($result);
    $idn=$row['idn'];
    $F_name=$row['F_name'];
   // $emergency=$row['emergency'];
    $address=$row['address'];
    //$age=$row['age'];
     $diagnosis=$row['diagnosis'];
    //$bloodpressure=$row['bloodpressure'];
    //$heartbeat=$row['heartbeat'];
//$BMI=$row['BMI'];
   //// $diagnosis=$row['diagnosis'];
    $prescription=$row['prescription'];
    
    $r1=$row['r1'];
    $r2=$row['r2'];
    $r3=$row['r3'];
    $r4=$row['r4'];
    $r5=$row['r5'];
    $r6=$row['r6'];
    $r7=$row['r7'];
    $r8=$row['r8'];
    $r9=$row['r9'];
    $r10=$row['r10'];
    $r11=$row['r11'];

    echo' <tr>
            <th scope="row">'.$idn.'</th>
                        <td>'.$F_name.'</td>
                      <td>'.$diagnosis.'</td>
                       <td>'.$address.'</td>
                       <td>'.$r1.'</td>
                       <td>'.$r2.'</td>
                       <td>'.$r3.'</td>
                       <td>'.$r4.'</td>
                       <td>'.$r5.'</td>
                       <td>'.$r6.'</td>
                       <td>'.$r7.'</td>
                       <td>'.$r8.'</td>
                       <td>'.$r9.'</td>
                       <td>'.$r10.'</td>
                      <td>'.$r11.'</td>
                       
                <td>
            <button ><a href="Update.php? Updateid='.$idn.'" class="text-light">Update</a></button>
            <button><a href="Delete.php? Deleteid='.$idn.'" class="text-light">Delete</a></button>
        </td>
            
        </tr> ';
        
}
}

        
        ?>
        
    </tbody>
</table>
<table class="table">
    <thead>
        <tr>
            
        </tr>
        
    </thead>
    <tbody>
        <?php
        if($_SERVER['REQUEST_METHOD'] =="POST") {
            $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
            
$sql="Select * from pat_file where  F_name='$F_name' ";
$result=mysqli_query($conn,$sql);
if($result) {
    $row=mysqli_fetch_assoc($result);
    $idn=$row['idn'];
    $F_name=$row['F_name'];
   // $emergency=$row['emergency'];
    $address=$row['address'];
    //$age=$row['age'];
     $diagnosis=$row['diagnosis'];
    //$bloodpressure=$row['bloodpressure'];
    //$heartbeat=$row['heartbeat'];
//$BMI=$row['BMI'];
   //// $diagnosis=$row['diagnosis'];
    $prescription=$row['prescription'];
    
    $h1=$row['h1'];
    $h2=$row['h2'];
    $h3=$row['h3'];
    $h4=$row['h4'];
    $h5=$row['h5'];
    $h6=$row['h6'];
    $h7=$row['h7'];
    $h8=$row['h8'];
    $h9=$row['h9'];
    $h10=$row['h10'];
    $h11=$row['h11'];

    echo' <tr>
            <th scope="row">'.$idn.'</th>
                        <td>'.$F_name.'</td>
                      <td>'.$diagnosis.'</td>
                       <td>'.$address.'</td>
                       <td>'.$h1.'</td>
                       <td>'.$h2.'</td>
                       <td>'.$h3.'</td>
                       <td>'.$h4.'</td>
                       <td>'.$h5.'</td>
                       <td>'.$h6.'</td>
                       <td>'.$h7.'</td>
                       <td>'.$h8.'</td>
                       <td>'.$h9.'</td>
                       <td>'.$h10.'</td>
                      <td>'.$h11.'</td>
                       
                <td>
            <button ><a href="Update.php? Updateid='.$idn.'" class="text-light">Update</a></button>
            <button><a href="Delete.php? Deleteid='.$idn.'" class="text-light">Delete</a></button>
        </td>
            
        </tr> ';
        
}
}

        
        ?>
        
    </tbody>
</table>

   


    </div>




    
    </form>
  
    
</button>
    
<div class="container">
</button>





<div class="meti" style="  column-count:3; column-span: all; text-align: center; margin-left:25%;">

    <div style="border: 10px dotted gray;  width:300px; height:100px; background:darkolivegreen;   ">
   
        
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
         "><a href="diagnosis1.php">diagnosis</a></button></div><br>
    
    
     <div style="border: 10px dotted gray;  width:300px; height:100px; background: darkolivegreen;   ">
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
         "><a href="labrequest1.php">labrequest</a></button></div><br>
       <div style="border: 10px dotted gray;  width:300px; height:100px; background: darkolivegreen;   ">
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
         "><a href="prescription1.php">prescription</a></button></div><br>

    
</div>


     
</body>
</html>

         <?php
if($_SERVER['REQUEST_METHOD'] =="POST") {
    $F_name=filter_input(INPUT_POST, "F_name", FILTER_SANITIZE_SPECIAL_CHARS);
 
       echo"your fhg is sent seccessfully!!";

}

else{
    mysqli_close($conn);
}


?>

