<?php
session_start(); 

if(empty($_SESSION['user'])){
header("LOCATION:../sss/index.php"); 

}

else{
   $idd=$_GET['proid'];

   if(!empty($_GET['proid'])){
    $_SESSION['idchat']=$idd;
  
  //echo $idd ; die ;
  
  }
  if(empty($_GET['proid'])){
    
    $idd=$_SESSION['idchat'];
  //echo $idd ; die ;
  
  }





  $con = mysqli_connect("localhost","root","","software");


  $sql22 = "SELECT * FROM `course` where `id`='$idd' "; 



  $q1 =  mysqli_query($con,$sql22); 
 
  
  while ($res1= mysqli_fetch_assoc($q1)){
  
  $prod1 =$res1 ; 
  
  
  
  
  }
  
  $data1 = $prod1 ; 



  
  if(isset($_POST['msg'])){

    
   $msg = $_POST['msg'];
       $sender = $_SESSION['user']['id']; 
       $course_id = $_SESSION['idchat'] ; 
     
       $name= $_SESSION['user']['first_name']; 
     
     //echo $mark , $mark_name , $student_name , $course_id ; die  ;
     
     
     
         
       $sql1 = "INSERT INTO `msg`(`msg`, `course_id`, `sender_id` , `sender_name`) VALUES ('$msg' , '$course_id' , '$sender' ,'$name'  )"; 
       
       mysqli_query($con,$sql1); 
       
       $res1 = mysqli_affected_rows($con); 
       
       if ( $res1== 1){
         header("LOCATION:chat.php?proid=$course_id");
         //$sql2 = "DELETE FROM `marks` WHERE `id`='$idd' "; 
     
        // $q2 =  mysqli_query($con,$sql2); 
         
        // $res2 = mysqli_affected_rows($con);
       
       
       }else{
           echo "error"; die;
       }
      
     
       }


  
  
 $sql = "SELECT * FROM `msg` where `course_id`='$idd' "; 
  //$sql = "SELECT * FROM `msg` where `course_id`='2' ";


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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_chat.css">
    
</head>
<body>
  <button style="background-color: black; color:white; padding-top: 10px;  padding-bottom: 10px; width: 100px; border-bottom-right-radius: 40px ;" class="back">Back</button>
<h2 class="h2_name2">chatting at course </h2> <h2 class="h2_name" id="h2_name"> <?php echo($data1['name']);?></h2> 
<section class="section_chat">
<?php 

foreach($data as $pro):


?>
    <div class="div_chat2"><h3><?= $pro['sender_name']." id= ".$pro['sender_id'];?></h3>
    <h5 style="margin-left: 3px;"><?= $pro['msg'];?>  </h5></div>

    <?php   endforeach; ?>


    <div></div>
    <form action="chat.php" method="POST">
    <!-- <button>submit</button> -->
<div>1</div>
<div class="div_chat1"><input id="in1" placeholder="write a msg . ." name="msg" onchange="do1()"  type="text" name="" id=""></div>

</form></section>

<script> 
function do1(){
    document.getElementById("in1").style.border="none";

}

</script>
</body>
</html>
