<?php
require_once('config.php');

$bookID = $_POST["bookID"];
$userID = $_POST["userID"];
$sql = "DELETE FROM cart WHERE bookID = '$bookID' AND userID = '$userID'";
    
    if($con->query($sql)) {
    echo "Success"; 
    header("Location:ordereditem.php");
    }
    else echo "error";

?>