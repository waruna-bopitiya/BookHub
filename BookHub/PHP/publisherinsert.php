<?php

    require 'config.php';

    $bookname = $_POST["bookname"];
    $authorkname = $_POST["authorkname"];
    $price = $_POST["price"];
    $publishdate = $_POST["publishdate"];
    $image = $_POST["image"];

    "INSERT INTO bk VALUES ('$bookname', '$authorkname','$price','$publishdate', '$image')";

?>