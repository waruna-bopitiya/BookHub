<?php

    session_start();

    $fullName = $_POST['name'];
    $image = basename($_FILES["image"]["name"]);
    $pass = $_POST['password'];
    $target_dir = "src/asserts/images/upimages/ppumangi.png";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $id= $_POST['id'];
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    include_once 'config.php';

    
    // Check if image file is a actual image or fake image
    if(isset($_POST["image"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    $sql = "UPDATE `user` SET `fullName`='$fullName' , `propic`='$image' ,`password`='$pass' where email = $email";
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
        $_SESSION["email"] = $id;
        $_SESSION["name"] =$fullName;
        header("Location: src/asserts/images/upimages/ppumangi.png");
      
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    }
    
    $conn->close();
    
?>
         