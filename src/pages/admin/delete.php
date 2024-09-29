<?php

    $email = $_GET['email'];  
   
    include 'config.php';

     $email=["email"];
    
    $sql = "DELETE FROM  WHERE email='$email'";
    
    if ($conn->query($sql)) {
        echo "Deleted";
    } else {
    echo "Not success";
    }
    
    $conn->close();
    
?>