<?php

require_once('config.php');

if(isset($_POST['submit'])) {

    $bookID = $_POST["bookID"];
    $sql = "INSERT INTO cart (bookID) VALUES ('$bookID')";
    

    if(mysqli_query($con, $sql)){

        echo "record added succesfully to database";
    }
    else{
        echo "failed to add record to database".mysqli_error($con);
    
    }
   
    }


















    mysqli_close($con);
?>