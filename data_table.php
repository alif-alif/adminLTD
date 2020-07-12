<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Info</title>
    <link rel="shortcut icon" href="css/img/fa.jpg" type="image/x-icon">


    <style>
        body {
            background-color: #3FBB93;
            margin-left:20rem;
        }
    
        h1 {
            margin-left:16rem;
        }

    </style>
</head>

<body>


        <h1>All Data Information</h1>
        <ul>
                <li><a href="http://localhost/alif/">home</a></li>
            </ul>

        <?php
        
            if (isset($_REQUEST["edited"])) {

                echo " <b> Data has been Edited </b>";

            } elseif (isset ($_REQUEST["deleted"])) {

                echo " <b> Data has been Deleted </b>";

            }

        ?>
        
                <table border = "1px"> 
            
                <tr>
               
                    <td><b>S.N</b></td>
                    <td><b>DB ID</b></td>
                    <td><b>First Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Password</b></td>
                    <td><b>Retype Password</b></td>
                    <td><b>Action</b></td>
                     
                </tr>


        <?php
            
                require_once ("connect.php");
                if ($connect == true) 

                        {

                echo "connected";
            }

                $showDataQuery = "SELECT * FROM my_newreg";
                $runDataQuery = mysqli_query ($connect,$showDataQuery);

                if($runDataQuery == true) {
                    $snCount= 1;
                    while($myDate= mysqli_fetch_array($runDataQuery)) { ?>
                    
                    <form action="savedatacore.php" method="POST">
                            <tr>
                                <td><?php echo $snCount; $snCount++?> </td>
                                <td><?php echo $myDate["id"] ?> </td>
                                <td><?php echo $myDate["fullname"] ?> </td>
                                <td><?php echo $myDate["email"] ?></td>
                                <td><?php echo $myDate["password"] ?></td>
                                <td><?php echo $myDate["retypepassword"] ?></td>
                                
                                <td> <a href="edit_form.php?edit_id=<?php echo $myDate["id"];?>">Edit</a> | <a onclick="return confirm ('Are you sure?');" href="deletedata_core.php?id=<?php echo $myDate["id"];?>">Delete</a> </td>
                        
                         </tr>
                    </form>
        
        <?php }}?>
        





   
    </body>

</html>