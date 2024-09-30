<?php

    

    if(isset($_POST['submit'])) {


        
    $target = "src/asserts/images/upimages/".basename($_FILES['image']['name']);


    require 'config.php';
    
    $bookID = $_POST["bookID"];
    $bookname = $_POST["bookname"];
    $authorname = $_POST["authorname"];
    $price = $_POST["price"];
    $category = $_POST['category'];
    $description = $_POST["description"];
    $image = $_FILES["image"]["name"];


    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES["image"]["name"];
        $target = "src/asserts/images/upimages/" . basename($image);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "Image uploaded successfully";
        } else {
            echo "Failed to upload image";
        }

        $sql = "UPDATE books SET bookName='$bookname', authorName='$authorname', price='$price', category='$category' , description='$description', image='$image'   WHERE bookID='$bookID'";
        
        if(mysqli_query($con, $sql)){

                echo "record added succesfully to database";
        }
        else{
                echo "failed to add record to database" .mysqli_error($con);
            
            }
        
          mysqli_close($con);

        }
    
    else {
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                echo "Image uploaded successfully";
            }
        else
            {
                echo "Failed to upload image";
            }
        


            $sql = "UPDATE books SET bookName='$bookname', authorName='$authorname', price='$price', category='$category' , description='$description' WHERE bookID='$bookID'";
        
        if(mysqli_query($con, $sql)){

                echo "record added succesfully to database";
        }
        else{
                echo "failed to add record to database" .mysqli_error($con);
            
            }
        
    mysqli_close($con);

}}

header("location:pub_added.php");

?>










