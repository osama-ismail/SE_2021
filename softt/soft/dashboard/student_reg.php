<?php
session_start(); 

if(empty($_SESSION['user'])){
header("LOCATION:../sss/index.php"); 

}


else{
  $idd=$_GET['proid'];
$con = mysqli_connect("localhost","root","","software");

$sql = "SELECT * FROM `student_reg` where `course_id`='$idd' "; 

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>student register</title>

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
    background:gray;
  }
  </style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">

  </div>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Students register in course</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
            
            </div>



            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>student name</th>
                    <th>student id</th>
                    
                  
                    <th>ادراج علامة للطالب </th>
                   
                  </tr>
                  </thead>
                  <tbody>




                  <?php 

foreach($data as $pro):


?>
                  <tr>
                    <td><?= $pro['first_name']." ".$pro['last_name'];?> </td>

               
                    <td><?= $pro['id'];?></td>
                
                    <td> <a class="btn btn-secondary" href="addmark.php?proid=<?= $pro['id'];?>&proid1=<?= $pro['course_id'];?>&proid3=<?= $pro['first_name']." ".$pro['last_name'];?>">ادراج علامة </a></td>

                 
                  </tr>
                  <?php   endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>student name</th>
                    <th>student id</th>
                  
                   
                  
                    <th>update</th>
                
                  </tr>
                  </tfoot>
                </table>
              </div>





    

              <a href="student_reg.php?proid=<?= $idd;?>">المسجلين في المساق </a>
              <br>
   <a href="marks.php?proid=<?= $idd;?>">علامات المسجلين في المساق</a>























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
<!-- DataTables  & Plugins -->
<script src="backassets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="backassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="backassets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="backassets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="backassets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="backassets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>