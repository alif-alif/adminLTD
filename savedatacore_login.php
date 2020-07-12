<?php

session_start ();

require_once ("connect.php");

if (isset ($_POST ['login']) ){

    $email = $_POST ['email'];
    $password=$_POST ['password'];

    $query= " SELECT * FROM  loginpage WHERE email='$email' && password ='$password' ";

    
    $result =mysqli_query ($connect, $query);

    $total = mysqli_num_rows ($result);
     
    if ($total == 1)
    {
        $_SESSION['email']= $email;
        header ('location:home.php');

    }
    else {
        echo "fail ! pls try agin";
        header ('location:login.php');
    }

   
}

?>
