<?php

    

    if(isset($_POST['submit'])) {



    $target = "src/asserts/images/upimages/".basename($_FILES['image']['name']);


    require 'config.php';
    
    $bookname = $_POST["bookname"];
    $authorname = $_POST["authorname"];
    $price = $_POST["price"];
    $category = $_POST['category'];
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
        
            $sql = "INSERT INTO books (bookName , authorName , price ,	category , publishdate , image) VALUES ('$bookname', '$authorname','$price','$category','$publishdate', '$image')";
        
        if(mysqli_query($con, $sql)){

                echo "record added succesfully to database";
        }
        else{
                echo "failed to add record to database" .mysqli_error($con);
            
            }
        
    mysqli_close($con);

}
header("location:pub_added.php");
?>










