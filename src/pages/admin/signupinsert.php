<?php

require 'config.php';

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $rpwd=$_POST['rpwd'];

    $sql="INSERT INTO  VALUES('$fname','$lname','$email','$pwd','$rpwd')";
   
    if($con->query($sql))
    {
        echo "Insert successful";
    }
    else{
        echo "error".$con->error;
    }

    $con->close();
    ?>