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
<html class="wide wow-animation" lang="en">

<head>
  <title>the course</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto:100,300,400,700,900">
  <link rel="stylesheet" href="../sss/css/bootstrap.css">
  <link rel="stylesheet" href="../sss/css/style.css">
  
  <!--[if lt IE 10]>      <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>      <script src="js/html5shiv.min.js"></script>    <![endif]-->
</head>

<body>

  <div class="page text-center">
    <section class="section">
      <header class="page-header">
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-dark novi-background" data-body-class="rd-navbar-absolute-linked" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-sidebar" data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false" data-md-stick-up-offset="90px" data-lg-stick-up-offset="90px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-panel"> <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li> <?=$_SESSION['user']['first_name']." ".$_SESSION['user']['second_name'];?>  </li>
                  <li><a href="#">assistent functional</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="student_reg.php?proid=<?= $idd;?>">show student reg in course</a> </li>
                      <li><a href="marks.php?proid=<?= $idd;?>">show marks</a> </li>
                      <li><a href="index.php">the courses</a> </li>
                    </ul>
                  </li>
                  <li>
                    <ul class="rd-navbar-megamenu megamenu-icons">
                      <li>
                        <p class="rd-megamenu-header">Megamenu Title</p>
                        <ul class="rd-megamenu-list">
                          <li><a href="#">Link #1</a></li>
                          <li><a href="#">Link #2</a></li>
                          <li><a href="#">Link #3</a></li>
                          <li><a href="#">Link #4</a></li>
                          <li><a href="#">Link #5</a></li>
                        </ul>
                      </li>
                      <li>
                        <p class="rd-megamenu-header">Megamenu Title</p>
                        <ul class="rd-megamenu-list">
                          <li><a href="#">Link #1</a></li>
                          <li><a href="#">Link #2</a></li>
                          <li><a href="#">Link #3</a></li>
                          <li><a href="#">Link #4</a></li>
                          <li><a href="#">Link #5</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="rd-navbar-top-panel">
                <div class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></div>
                <div class="group-sm group-middle rd-navbar-top-panel-content"> <a class="btn btn-sm btn-primary btn-effect-ujarak" href="logout.php">logout</a>
                  <div class="rd-navbar-nav-wrap__shop"></div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section>
        <div class="page-title novi-background bg-image" style="background-image: url(&quot;image/44.png&quot;);">
          <div class="page-title-text">elearning</div>
        </div>
      </section>
    </section>
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
  <div class="snackbars" id="form-output-global"></div>
  
  <script src="../sss/js/core.min.js"></script>
  <script src="../sss/js/script.js"></script>
</body>
</html>