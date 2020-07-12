<?php

session_start ();

require_once ("connect.php");

if ($connect == true) 

{

    echo "connected";
}

if (isset($_REQUEST["fullname"]) && isset($_REQUEST["email"]) && isset ($_REQUEST["password"]) && isset($_REQUEST["retypepassword"]))

{   
    

    $fullname= $_REQUEST["fullname"];
    $email = $_REQUEST["email"];
    $password= $_REQUEST["password"];
    $retypepassword= $_REQUEST["retypepassword"];
    $nameForDB = uniqid();

    $insertQuery = "INSERT INTO my_newreg (fullName,email,password,retypepassword) VALUES ('$fullname',' $email','$password', '$retypepassword' )";
    $insertQuerya = "INSERT INTO loginpage (email,password) VALUES ('$email','$password')";

    $runQuery == mysqli_query ($connect,$insertQuery);
    $runQuery == mysqli_query ($connect,$insertQuerya);
    
    

    if ($runQuery ==  "true" || $num = 1 ) 
    {
       
        header ("location: register.php?action = true");
        echo " usename already taken";

    } else 
    
    {
        
        header ("location: register.php?action = false");
    } 
    
}




?>