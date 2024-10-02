
<?php

    

    if(isset($_POST['submit'])) {



    require 'config.php';
    
    $uid=$_POST["uid"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    
    
    
    $sql = "INSERT user (userID , firstName , lastName ,	email , pswd ) VALUES ('$uid','$fname','$lname','$email','$pwd')";
        
        if(mysqli_query($con, $sql)){

                echo "record added succesfully to database";
        }
        else{
                echo "failed to add record to database".mysqli_error($con);
            
            }
        
    mysqli_close($con);

}
?>