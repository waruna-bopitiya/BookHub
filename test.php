<?php
session_start();
 if(isset($_SESSION["email"])) { 
    $email = $_SESSION['email'];
require_once('config.php');
$sql3 = "SELECT * FROM user WHERE email = '$email' And userType='client'";

$result3 = $con->query($sql3);

    if ($result3->num_rows > 0) {

        $row = $result3->fetch_assoc();

        $userID = $row['userID'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $userType = $row['userType'];


        echo $userID;
    } 


        $sql = "SELECT books.bookID, books.bookName, books.price FROM books INNER JOIN cart ON books.bookID = cart.bookID WHERE cart.userID = '$userID'";
        
        $result = $con->query($sql);
        
            while ($row = $result->fetch_assoc()) {
        
                
                
                $bookID = $row['bookID'];
                $bookName = $row['bookName'];
                $price = $row['price'];

                echo $bookID;
                echo $bookName;
                echo $price;
                
        
            } 

        }
        
?>