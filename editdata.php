<?php
require_once('header.php');
require('config.php');
?>
<link rel="stylesheet" href="src/asserts/css/publisher.css">

<div class="uploadbooktitle">

<a href="#" class="button1">Edit Book Details</a>
<a href="pub_added.php" class="button2">Discard Editing</a>

</div>

<form action="editinsert.php" method="POST" enctype="multipart/form-data">
    <div class="form">
        <?php
        $bookID = $_GET["bookID"];
        $sql = "SELECT bookID, bookName, authorName, price, category, publishdate, image FROM books WHERE bookID = '$bookID'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['bookName'];
            $authorname = $row['authorName'];
            $price = $row['price'];
            $category = $row['category'];
            $publishdate = $row['publishdate'];
            $image = $row['image'];
        } else {
            echo "No book found with this ID";
            exit();
        }
        ?>

        <div class="form1">
            <input type="hidden" name="bookID" value="<?= $bookID ?>">
            <p>Book Name</p>
            <input type="text" name="bookname" placeholder="Book Name" class="getinput" value="<?= $name ?>">
            <p>Author Name</p>
            <input type="text" name="authorname" placeholder="Author Name" class="getinput" value="<?= $authorname ?>">

            <div class="priceandcate">
                <div>
                    <p>Price</p>
                    <label for="number">Rs.</label>
                    <input type="number" name="price" placeholder="Price" class="getinput" style="width: 100px;" value="<?= $price ?>">
                </div>

                <div>
                    <p style="margin-right: 30px;">Category</p>
                    <select name="category" id="category" class="getinput" style="width: 200px; height: 40px; margin-right: 30px;">
                        <option value="Fiction" <?= ($category == "Fiction") ? "selected" : "" ?>>Fiction</option>
                        <option value="Non-Fiction" <?= ($category == "Non-Fiction") ? "selected" : "" ?>>Non-Fiction</option>
                        <option value="Children's Books" <?= ($category == "Children's Books") ? "selected" : "" ?>>Children's Books</option>
                        <option value="Academic & Educational" <?= ($category == "Academic & Educational") ? "selected" : "" ?>>Academic & Educational</option>
                        <option value="Lifestyle & Hobbies" <?= ($category == "Lifestyle & Hobbies") ? "selected" : "" ?>>Lifestyle & Hobbies</option>
                    </select>
                </div>
            </div>

            <p>Published Date</p>
            <input type="date" name="publishdate" class="getinput" value="<?= $publishdate ?>">

        </div>

        <div class="form2">
            <label for="imageupload1" class="imageupload1" id="hide">
                <p>Click here to upload image</p>
                <img id="updateimg" src="src/asserts/images/upimages/<?= $image ?>" alt="Current Image" width="100" height="100">
            </label>
            <input type="file" name="image" id="imageupload1" accept="image/*" onchange="preview_image(event)">
        </div>
    </div>

    <div class="submit">
        <label for="submitbtn1" class="submitbtn1">Submit</label>
        <input type="submit" name="submit" value="Submit" id="submitbtn1">
    </div>
</form>

<script>
        function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('updateimg');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
