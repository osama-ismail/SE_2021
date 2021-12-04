<?php
session_start(); 

if(empty($_SESSION['user'])){
  header("LOCATION:../sss/index.php"); 
  
  }

$student_id= $_GET['proid']; 
$course_id= $_GET['proid1']; 
$student_name = $_GET['proid3']; 

//echo $student_name;
//echo $course_id; die  ;

if(!empty($_GET['proid'])){
  $_SESSION['id1']=$student_id;
  $_SESSION['id2']=$course_id;
  $_SESSION['id3']=$student_name;

//echo $idd ; die ;

}
if(empty($_GET['proid'])){
  
    $student_id= $_SESSION['id1']; 
    $course_id=  $_SESSION['id2']; 
    $student_name = $_SESSION['id3']; 
//echo $idd ; die ;

}


$con = mysqli_connect("localhost","root","","software");






if(isset($_POST['mark'])){

 

  $mark_name = $_POST['name1'];

  $mark= $_POST['mark'];

//echo $mark , $mark_name , $student_name , $course_id ; die  ;



    
  $sql1 = "INSERT INTO `marks`(`student_id`, `couse_id`, `mark_name`, `mark`) VALUES ('$student_id' , '$course_id' , '$mark_name' ,'$mark' )"; 
  
  mysqli_query($con,$sql1); 
  
  $res1 = mysqli_affected_rows($con); 
  
  if ( $res1== 1){
    header("LOCATION:student_reg.php?proid=$course_id");
    //$sql2 = "DELETE FROM `marks` WHERE `id`='$idd' "; 

   // $q2 =  mysqli_query($con,$sql2); 
    
   // $res2 = mysqli_affected_rows($con);
  
  
  }else{
      echo "error"; die;
  }
 

  }

  


  





?>
















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>add mark</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="backassets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="backassets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="backassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="backassets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="backassets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backassets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="backassets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="backassets/plugins/summernote/summernote-bs4.min.css">
</head>
<style>
  body{
    background-color:gray;
  }
  </style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  
  </div>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">اضافة علامات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">  student name : <?php echo $student_name  ?></h3>
              </div>
           
              <form action="addmark.php"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                   
                  student name : <?php echo $student_name  ?>
                  <br>
                  student number : <?php echo $student_id   ?>
                  <br>
                  <input type="text", placeholder="assigment name" , name="name1">
                  <br>
            

                  </div>
                   <input type="text" , name="mark" , placeholder="ادخل العلامة هنا ">
                   


                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">enter the mark</button>
                </div>
              </form>
            </div>



            <a href="student_reg.php?proid=<?= $course_id;?>">المسجلين في المساق </a>
            <br>
   <a href="marks.php?proid=<?= $course_id;?>">علامات المسجلين في المساق</a>








    























    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="backassets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="backassets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="backassets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="backassets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="backassets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="backassets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="backassets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="backassets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="backassets/plugins/moment/moment.min.js"></script>
<script src="backassets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="backassets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="backassets/plugins/summernote/summernote-bs4.min.js"></script>


<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<!-- overlayScrollbars -->
<script src="backassets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="backassets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="backassets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="backassets/dist/js/pages/dashboard.js"></script>
</body>
</html>
