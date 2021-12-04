<?php
session_start(); 

$idd=$_GET['proid'];
$idd1=$_GET['proid1'];

$con = mysqli_connect("localhost","root","","software");

$sql = "DELETE FROM `marks` WHERE `mark_id`='$idd' "; 

$q =  mysqli_query($con,$sql); 

$res = mysqli_affected_rows($con);



if($res==1){
header("LOCATION:marks.php?proid=$idd1");


}else{

    header("LOCATION:marks.php?proid=$idd1");

}



  
 
  





?>