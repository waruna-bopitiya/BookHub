<?php

    

    if(isset($_POST['submit'])) {
    $target = "images/".basename($_FILES['image']['name']);

    require 'config.php';
    
    $bookid = $_POST["bookid"];
    $bookname = $_POST["bookname"];
    $authorname = $_POST["authorname"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $publishdate = $_POST["publishdate"];
    $image = $_FILES["image"]["name"];

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
        echo "Image uploaded successfully";
    }
    else
    {
        echo "Failed to upload image";
    }

    $sql = "INSERT INTO books (bookID , bookName , authorName , price	category , publishdate , image) VALUES ('$bookid', '$bookname', '$authorname','$price','$category','$publishdate', '$image')";
}
?>