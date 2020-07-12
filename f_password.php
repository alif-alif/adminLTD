<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Forgot Password</title>
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
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          <input type="submit" name ="fpass" id="fpass" class="btn btn-primary btn-block" value="Request new password">
            
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="http://localhost/adminlogin/login.php">Login</a>
      </p>
      <p class="mb-0">
        <a href="http://localhost/adminlogin/register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<?php

  require_once ("connect.php");

  if (isset($_POST['fpass']))
  {

    $email = $_POST['email'];
    

      $query = "SELECT * FROM loginpage where email='$email' ";
      $query_run = mysqli_query ($connect,$query);

        if (mysqli_num_rows ($query_run) > 0) 
        {
            $row = mysqli_fetch_assoc ($query_run);
            if ($email == $row ['email'])
            
            {
              echo "
              
              <script>

                    alert ('mail already existis');
                    window.location.href='recover-password.php';
                    
                    </script>
                    ";

            } 
            
            else 
            {
              


            }



        } else
           
            
        
        {

              //1st if


              echo "

              <script>

              alert ('your email is not found register first');
              window.location.href='register.php';
              
              </script>
              ";
        }

  }

?>






<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
