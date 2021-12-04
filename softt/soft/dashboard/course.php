<?php 
session_start(); 

if(empty($_SESSION['user'])){
header("LOCATION:../sss/index.php"); 

}


else{
  $idd=$_GET['proid'];
$con = mysqli_connect("localhost","root","","software");

$sql = "SELECT * FROM `marksview` where `couse_id`='$idd' "; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

  
 
  


}




?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eTeaching</title>
    <style>
        body{background-color:#3d4c74}
        a{ width: 25%}
    </style>
</head>
<body>
<div style=" background-color:white; width:100%">
    <table style="width: 100%">
        <tr style="width: 100%">
            <td style="width: 40%">
                <span> <pre> Welcome to eTeaching </pre> </span>
            </td>
            <td style="width: 10%">
                <a href="" > Profile </a>
            </td>
            <td style="width: 10%">
                <a href="index.php" > Mycourses </a>
            </td>
            <td style="width: 10%">
                <a href="marks.php?proid=<?= $idd;?>" > Marks </a>
            </td>
            <td style="width: 10%">
                <a href="student_reg.php?proid=<?= $idd;?>" > student reg </a>
            </td>
            <td style="width: 10%" >
                <a href="logout.php" > Logout </a>
            </td>
        </tr>
    </table>
    <br>
    <center> <h1> eTeaching </h1>  </center>
    <br>
    <span> --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </span>
    <pre>
         Announcements :
            * info
            * info
            * info
         Tutorials :
            Some tips
            Some tips
         information about the site :
            info
            info
            info
     </pre>
</div>
</body>
</html> 