

<?php
session_start();
if(isset($_POST['password1'])){
  $user = $_POST['username1'];
  $password = $_POST['password1']; 
$arr1 = str_split($user);

  $con = mysqli_connect("localhost","root","","software");

  if($arr1[0]=="p")
  $sql = "SELECT * FROM `prof` WHERE  `id` = '$user' && `password`='$password'"; 
  else if($arr1[0]=="t")
  $sql = "SELECT * FROM `t_a` WHERE  `id` = '$user' && `password`='$password'"; 
else{  $sql = "SELECT * FROM `student` WHERE  `id` = '$user' && `password`='$password'"; 
}

  $q = mysqli_query($con,$sql); 
  $res = mysqli_fetch_assoc($q);
if(!empty($res)){

  
 header("LOCATION:config.php");
}else{
  echo "email or password wrong"; 
//   echo "<script> myArray[1]  </script>"; 

}
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style> 
    body{    
        width: 100%;
    height: 100%;
    background-image: url("pics/3.jpg");
     /* background-image: url("C:\xampp\htdocs\software\login-main\software_login\pics\3.jpg"); */
     /* background-color: red; */
    /* font:600 16px/18px 'Open Sans',sans-serif; */
    background-repeat: no-repeat;
   
    background-size: cover; 
}
</style>
</head>
<body>
    <div class="login-wrap">
        <link href="scratch.css"rel="stylesheet"type="text/css">
            <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
           
            <div class="login-form"> 
              
            <div class="sign-in-htm">

                        <form action="login.php" method="post">     
                    <div class="group">
                        <label for="user"  class="label">Username</label>
                        <input id="user" type="text" name="username1"  class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="password1" type="password"  class="input" data-type="password">
                    </div>
                    
                    <div class="group">
                    <button type="submit"  class="button">Login</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">

                    </div> 
                </div>
                </form>    


              

            </div>
        </div>
    </div>  

</body>
</html>