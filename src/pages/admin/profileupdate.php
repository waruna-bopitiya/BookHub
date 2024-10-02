<?php

require 'config.php';

$uid=$_POST["uid"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email = $_POST["email"];
$pwd = $_POST['pwd'];
$addr=$_POST["address"];

if(empty($uid)||empty($fname)||empty($lname)||empty($email)||empty($pwd)||empty($addr))
{
    echo "All required";
}
else{
     $sql="UPDATE user set firstName='$fname',lastName='$lname',emial='$email,pswd='$pwd',address='$addr' WHERE userID='$uid'";
     if($con->query($sql))
     {
        echo "Updated";
     }
     else{
        echo "Not updated";
     }
}