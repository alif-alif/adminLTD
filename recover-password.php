<?php

session_start ();

require_once ("connect.php");

if ($connect == true) 

{

    echo "connected";
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Recover Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>

 


  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

      <form action="" method="post">

      <div class="input-group mb-3">
          <input type="email"  name= "email" placeholder="Type your mail ID" class="form-control" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password"  name= "password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name= "retypepassword" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-12">

          <input type="submit" name ="rpass" id="rpass" class="btn btn-primary btn-block" value="Change password">
            
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php

require_once ("connect.php");

if (isset($_POST ['rpass'])) 
{

    $email = $_POST['email'];
    $password= $_POST['password'];
    $retypepassword= $_POST['retypepassword'];

    if ( $password == $retypepassword ) {

      $query = "select * from loginpage  where email ='$email'";
      
      $query_check = mysqli_query ($connect, $query);

      if ($query_check) {

        if (mysqli_num_rows ($query_check) > 0) {

          


         // $query1 = "UPDATE loginpage  SET password='$password'";
          $query1 = "UPDATE loginpage  SET password='$password' WHERE email='$email'";
  
          $query_run = mysqli_query ($connect, $query1);

          if ($query_run){

            echo "
                    
                  <script>
                    alert ('your password is updated');
                    window.location.href='home.php';
                    
                  </script>
                  header ('location:home.php');
                    ";
                   

          } else {

            echo "
                    
            <script>
              alert ('your password is not updated try again');
              window.location.href='f_password.php';
              
            </script>
              ";
          }


        } else {

          echo "
                    
          <script>
            alert ('your email is not found register first ');
            window.location.href='register.php';
            
          </script>
            ";
        }




      } else {
        echo "
                    
        <script>
          alert ('email query not working');
          window.location.href='f_password.php';
          
        </script>
          ";
      }

    } else {

      echo "
                    
                  <script>
                    alert ('your password is not match');
                    window.location.href='f_password.php';
                    
                  </script>
                    ";
    }

} 

  else 
  {

   
    }


?>        


        

      <p class="mt-3 mb-1">
        <a href="#">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->





<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
