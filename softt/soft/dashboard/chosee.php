<?php 
session_start(); 

if(empty($_SESSION['user'])){
header("LOCATION:../sss/index.php"); 

}
else{



    
$course_id = $_GET['proid'];

if ($course_id !=null){
$_SESSION['final'] = $course_id;}

if ($course_id == null){

    $course_id = $_SESSION['final'] ;
}

$con = mysqli_connect("localhost","root","","software");

$sql = "SELECT * FROM `t_a` "; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 
}

$data = $prod ; 

$u = $_SESSION['user']['id'] ; 


$sql1 = "SELECT * FROM `profview1` WHERE `prof_id` = '$u' "; 

$q1 =  mysqli_query($con,$sql1); 
$prod1 = []; 

while ($res1= mysqli_fetch_assoc($q1)){

$prod1 []=$res1 ; 
}

$data1 = $prod1 ; 









if(isset($_POST['course'])){
 
        
    $c=$_POST['course'];
    $t = $_POST['teacher'];

   

    
   
      
    $sql3 = "INSERT INTO `ta_course`(`ta_id`, `course_id`) VALUES ('$t' , '$c') "; 
    
    mysqli_query($con,$sql3); 
    
    $res3 = mysqli_affected_rows($con); 
    
    if ( $res3== 1){
    echo "ok "; 
    header("LOCATION:chosee.php?proid=$course_id"); 
    
    
    }else{
        echo "error"; 
    }
    
    }






}

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>choosing assitent</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto:100,300,400,700,900">
  <link rel="stylesheet" href="../sss/css/bootstrap.css">
  <link rel="stylesheet" href="../sss/css/style.css">
  <link rel="stylesheet" href="../sss/css/novi.css">
  <!--[if lt IE 10]>      <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>      <script src="js/html5shiv.min.js"></script>    <![endif]-->
</head>

<body>
  <div class="page-loader">
    
    <div class="page-loader-body">
      <div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
  </div>
  <div class="page text-center">
    <section class="section parallax-container" data-parallax-img="hi.jpg">
      <div class="parallax-content section-md context-dark text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-8">
              <hr class="divider-sm">
              <h1>choosing an assistent</h1>
              <p class="subtitle-variant-3">An-najah university</p> <a class="btn btn-white-outline btn-lg btn-effect-ujarak" href="coursee.php?proid=<?=$course_id;?>"> <span>go to course</span> </a>
            </div>
          </div>
        </div>
      </div>
      <form action="chosee.php" method="POST">
<div> 
<select name="teacher" >
<?php foreach($data as $pro) :     ?>
<option value="<?= $pro['id'];?>"> <?= $pro['first_name']." ".$pro['second_name'] ;?>  </option>
<?php endforeach;       ?>
 

</select>
</div>
<select name="course" >
<?php foreach($data1 as $pro) :     ?>
<option value="<?= $pro['id'];?>"> <?= $pro['name'];?>  </option>
<?php endforeach;       ?>
 

</select>

  </div>
  <button type="submit" >Submit</button>

</form>


    </section>
  </div>
  <div class="snackbars" id="form-output-global"></div>

  



  
 
  <script src="../sss/js/core.min.js"></script>
  <script src="../sss/js/script.js"></script>
</body>

</html>