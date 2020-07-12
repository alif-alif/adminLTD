<?php

require_once ("connect.php");

if (isset($_POST ['fpass'])) {

    $email = $_POST['email'];
    $password= $_POST['password'];
    $retypepassword= $_POST['retypepasswPOST'];



    if ($password == $retypepassword) {

    
        $query = "select * from my_newreg email=''$email";
        $query_check = mysqli_query ($connect, $query);

        if ($query_check) {




            if (mysqli_num_rows > 0) {

                $query1 = " UPDATE my_newreg set password='$password' ";
                $query_run =mysqli_query ($connect, $query1);


                if  ($query_run) {

                    echo "

                    <script>

                    alert ('your password is updaate');
                    window.location.href='home.php';
                    
                    </script>
                    ";
               

                } else {


                    echo "

                    <script>

                    alert ('your password is not updaate try again');
                    window.location.href='f_password.php';
                    
                    </script>
                    ";

                   
                }



            } else {


                echo "

                    <script>

                    alert ('your email is not found register first');
                    window.location.href='register.php';
                    
                    </script>
                    ";

            }


        
       


        } else {

            echo "

                    <script>

                    alert ('email query not work');
                    window.location.href='f_password.php';
                    
                    </script>
                    ";

        }
    


    } else {
        echo "

        <script>

        alert ('your password & Confrim password not match');
        window.location.href='f_password.php';
        
        </script>
        ";
    }

} 

else {


    // submit button else
}










?>