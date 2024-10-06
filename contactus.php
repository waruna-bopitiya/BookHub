<?php

    $title="About US "; 
    
    require_once('bookhubheader.php');
    // CONNECT DATABASE...............
    $conn = new mysqli("localhost", "root", "", "bookhub");

    // CHECK CONNECTION..............
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // GET DATA FROM FORM.......................
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {

        $Name = $_POST['Name'];
        $comment = $_POST['comment'];

        // INSERT COMMENT TO DATABASE.....................
        $sql = "INSERT INTO comments (sname, comment) VALUES ('$Name', '$comment')";
        $conn->query($sql);
        
    }

    // DELETE COMMENT FROM TABLE....................
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_comment'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM comments WHERE id='$id'";
        $conn->query($sql);
        
    }

    // UPDATE COMMENT FROM TABLE....................
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_comment'])) {
        $id = $_POST['id'];
        $Name = $_POST['Name'];
        $comment = $_POST['comment'];

        $sql = "UPDATE comments SET sname='$Name', comment='$comment' WHERE id='$id'";
        $conn->query($sql);
        
    }

    // GET ALL COMMENTS FOR DISPLAY..................
    $comments_sql = "SELECT * FROM comments";
    $comments_result = $conn->query($comments_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="src/asserts/css/contactus.css">
</head>
<body>


    <div class="container">
        <section class="contact-header">
            <h1>Contact Us</h1>
            <p>"BookHub is your ultimate destination for all things books. Whether you’re an avid reader, a student seeking academic resources, or someone looking to explore new genres, we’ve got something for everyone. Our extensive catalog spans fiction, non-fiction, self-help, academic texts, and more, making it easy to find the right book for any reader.</p>
            <p>At BookHub, we believe in making book shopping convenient and enjoyable. Our intuitive search feature helps you quickly find books by title, author, or genre, and detailed descriptions and reviews ensure that you can make informed decisions before purchasing.</p>
            <p>But we’re more than just an online bookstore—we’re a community. Our blog offers insightful articles, book recommendations, and author interviews to enrich your reading experience. Plus, we host virtual events such as book clubs and author talks to connect book lovers from all over the world.</p>
            <p>But we’re more than just an online bookstore—we’re a community. Our blog offers insightful articles, book recommendations, and author interviews to enrich your reading experience. Plus, we host virtual events such as book clubs and author talks to connect book lovers from all over the world.</p>
        </section>

        <section class="contact-info">
            <div class="info-item">
                <div class="icon">
                    <img src="src/asserts/images/web.png" alt="Location Icon">
                </div>
                <div class="info-text">
                    <h2>Site</h2>
                    <p><a href="http://www.books.lk">www.bookhub.lk</a></p>
                </div>
            </div>

            <div class="info-item">
                <div class="icon">
                    <img src="src/asserts/images/phone3.png" alt="Phone Icon">
                </div>
                <div class="info-text">
                    <h2>Contact Number</h2>
                    <p>+94 71 110 2929</p>
                </div>
            </div>

            <div class="info-item">
                <div class="icon">
                    <img src="src/asserts/images/mail2.png" alt="Mail Icon">
                </div>
                <div class="info-text">
                    <h2>Contact via Mail</h2>
                    <p><a href="mailto:inquiry@books.lk">bookhub@gmail.com</a></p>
                </div>
            </div>
        </section>
    </div>


    <!-- ADD COMMENT.............-->
        <div class="content">
    <section class="addcmnt">
                <h3>Add Comment:</h3><br>
                <form method="POST" onsubmit="return submitmessage();">
                    <span>Name:</span>
                    <input type="text" name="Name" required><br><br>
                    <span>Comment:</span><br><br>
                    <textarea class="textarea" name="comment" required></textarea><br><br>
                    <button type="submit" name="submit_comment" class="cmnt-btn">Submit</button>
                </form>
    </section>



            <!-- DISPLAY ALL COMMENTS SECTION................-->

            <section class="cmnt-list">
                <h3>All Comments:</h3><br>
                <?php 
                    if ($comments_result->num_rows > 0) {
                        while($row = $comments_result->fetch_assoc()) {
                ?>
                            <div class="comment_details">
                                <h4>
                                    <?php 
                                        echo "Name : "; 
                                        echo $row['sname']; 
                                    ?>
                                </h4><br>
                                <h4>
                                    <?php 
                                        echo "Comment : "; 
                                        echo $row['comment']; 
                                    ?>
                                </h4><br>

                                <!-- Edit and Delete Forms -->
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    
                                    <label>Edit Name :</label>
                                    <input type="text" name="Name" value="<?=$row['sname']?>" required><br><br>
                                    
                                    <label for="Name" class="editname">Edit Comment: </label>
                                    <textarea name="comment" cols="50" rows="3" required><?php echo $row['comment']; ?></textarea><br>
                                    
                                    <button type="submit" name="update_comment" class="updatebtn" onclick="return updatemessage();">Update</button>
                                    <button type="submit" name="delete_comment" class="deletebtn" onclick="return deletemessage();">Delete</button>
                                </form><br><br>
                            </div>
                <?php 
                        } 
                    } else {
                ?>
                        <p>No comments yet!</p>
                <?php 
                    } 
                ?>
        </section>
        </div>


    <header style="margin-top:100px;">
            <div class="header-container">
                <nav>
                    <a href="#">Home</a> | <a href="#" class="active">Contact US</a>
                </nav>
            </div>
    </header>

</body>

<script src="src/asserts/js/contactus.js"></script>
<?php $conn->close(); ?>

</html>




<?php
    require_once('bookhubfooter.php');
?>