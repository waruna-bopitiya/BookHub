<?php
            session_start();
    if(isset($_POST['submit'])) {
        require 'config.php';
        $userID = $_POST["userID"];

        $sql = "DELETE FROM user WHERE userID='$userID'";
        
        if(mysqli_query($con, $sql)){
            echo "record deleted succesfully to database";

            session_destroy();     //end the session
            header("Location:index.php"); 
          }
        else{
            echo "failed to delete record to database" .mysqli_error($con);
        
        }
        }
?>


