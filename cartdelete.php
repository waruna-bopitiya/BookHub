<?php
require_once('config.php');

$bookID = $_POST["bookID"];
$userID = $_POST["userID"];
$sql = "DELETE FROM cart WHERE bookID = '$bookID' AND userID = '$userID'";
    
    if($con->query($sql)) {
    ?>
    <script>
        alert("Successfully Deleted!");
        window.location.href = "cart.php";
    </script>
    <?php
    }
    else echo "error";

?>