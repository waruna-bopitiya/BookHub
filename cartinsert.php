<?php
session_start();
 if(isset($_SESSION["email"])) { 
    $email = $_SESSION['email'];
require_once('config.php');
$sql3 = "SELECT * FROM user WHERE email = '$email' And userType='client'";

$result = $con->query($sql3);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $userID = $row['userID'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $userType = $row['userType'];


    } 
        
    if(isset($_POST['submit'])) {




    $bookID = $_POST["bookID"];
    $sql = "INSERT INTO cart (userID,bookID) VALUES ('$userID','$bookID')";
    

    if(mysqli_query($con, $sql)){

        echo "record added succesfully to database";
    }
    else{
        echo "failed to add record to database".mysqli_error($con);
    
    }
   
}

   
    }




















    mysqli_close($con);
?>