<?php
session_start(); 
 if(empty($_SESSION['user'])){
   header("LOCATION:index.php"); 
  
   }

$id = $_SESSION['user']['id'];
$name = $_SESSION['user']['first_name']." ".$_SESSION['user']['second_name'];


$con = mysqli_connect("localhost","root","","software");


$sql = "SELECT * FROM `assview1`  WHERE `ta_id`='$id' "; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

// print_r($_SESSION['go']['id']); 
// print_r($_SESSION['go']['email']); die;
 
  





?>





<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>online store</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto:100,300,400,700,900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/novi.css">
 
  <!--[if lt IE 10]>      <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>      <script src="js/html5shiv.min.js"></script>    <![endif]-->
</head>

<body>
  





  <section class="section section-md bg-image context-dark" style="background-image: url(img/4.jpg);">
      <div class="container">
        <div class="row spacing-30 justify-content-center justify-content-lg-start">
          <div class="col-sm-10 col-lg-6">
            <div class="animated-box-wrap animated-box-transparent">
              <div class="animated-box">
                <div class="animated-box-front">
                  <div class="animated-box-inner">
                    <hr class="divider-sm divider-success">
                    <h3>teacher assistent</h3>
                    <p><?php echo $name;  ?></p>
                  </div>
                </div>
               
                <div class="animated-box-back">
                  <div class="animated-box-inner">
                    <hr class="divider-sm divider-success">
                    <h3 class=""> <span class="heading-3"></span>An-najah univesity<br></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>








<!-- ------------------------------------------------------------------------------------------------------------- -->


    <!-- --------------- -->









    <section class="section section-lg bg-gray-dark novi-background bg-image">
      <div class="container">
        <div class="row spacing-30 justify-content-center justify-content-lg-start">

        <?php foreach($data as $pro) :     ?>
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="animated-box-wrap animated-box-wrap-product animated-box-wrap-vertical">
              <div class="animated-box">
                <div class="animated-box-front">
                  <div class="animated-box-inner">
                    <div class="product-wrap">
                      <div class="product-image">
                        <figure> <img class="img-responsive" src="img/8.jpg" alt="" width="369" height="328"> </figure>
                       
                      </div>
                      <div class="product-title"> <a class="link-gray-darker" href="#"><?= $pro['name'] ;?></a> </div>
                    </div>
                  </div>
                </div>
                <div class="animated-box-back bg-gray-light">
                  <div class="animated-box-inner">
                    <div class="product-caption">
                      <div class="product-caption-centered">
                       <a class="btn btn-white-outline btn-sm" href="../dashboard/marks.php?proid=<?= $pro['id'];?>">view course</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;       ?>
        </div>
      </div>
    </section>

<!-- --------------- -->

<!--     
    <section class="section section-lg bg-gray-light novi-background bg-image">
      <div class="container">
        <div class="row spacing-30 justify-content-center justify-content-lg-start">
         
        
        
        <?php foreach($data as $pro) :     ?>
  
        
        
        <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="animated-box-wrap animated-box-wrap-product">
              <div class="animated-box">
                <div class="animated-box-front">
                  <div class="animated-box-inner">
                    <div class="product-wrap">
                      <div class="product-image">
                        <figure> <img class="img-responsive" src="../dashboard/upload/<?= $pro['img'] ;?>" alt="" width="369" height="328"> </figure>
                        <div class="product-price"> <del class="price-old">24.99</del> <span class="price-new"><?= $pro['price'] ;?></span> </div>
                      </div>
                      <div class="product-title"> <a class="link-gray-darker" href="#"><?= $pro['descrip'] ;?></a> </div>
                    </div>
                  </div>
                </div>
                <div class="animated-box-back bg-gray-light">
                  <div class="animated-box-inner">
                    <div class="product-caption">
                      <div class="product-caption-centered">
                        <ul class="list-product">
                          <li> <a class="icon-white icon novi-icon fl-bigmug-line-zoom60 icon-md" data-lightgallery="item" href="../dashboard/upload/<?= $pro['img'] ;?>" alt="" width="369" height="328"></a> </li>
                          <li> <a class="icon-white icon novi-icon fl-bigmug-line-shopping202 icon-md" href="#"></a> </li>
                        </ul> <a class="btn btn-white-outline btn-sm" href="#">read more</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
   
        </div>

        <?php endforeach;       ?>


      </div>
    </section> -->
  </div>

  
  <div class="snackbars" id="form-output-global"></div>




<!-- ------------------------------------------------------------------------------------------------------------- -->



<header class="page-header">
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default novi-background" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="true" data-md-stick-up-offset="190px" data-lg-stick-up-offset="190px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" style="background-image: linear-gradient(65deg, rgb(0, 0, 0) 31%, rgb(0, 0, 0) 41%, rgb(247, 247, 233) 77%); background-color: rgb(247, 25, 5);">
          <div class="rd-navbar-inner">
            <div class="rd-navbar-panel"> <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <div class="rd-navbar-brand"><a class="brand-name" href="motaha.php"><img src="images/motaha.png" alt="" width="100" height="28"></a></div>
            </div>
            <div class="rd-navbar-nav-wrap">
              <ul class="rd-navbar-nav">

            


         <?php      if(!empty($_SESSION['user'])): ?>
              <li><a href="# ">welcome back <?php echo $name;  ?> </a></li>
              <li><a href="../userlogout.php " class="btn btn-danger">logout </a></li>
                
                <?php      endif; ?>

              
                  <ul class="rd-navbar-megamenu megamenu-icons">
                 
               
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
  <!-- ------------------------------------------------------------------------------------------------------------- -->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>