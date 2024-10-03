<?php $title="Contact US "; ?>
<?php
    require_once('bookhubheader.php');
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


    <section class="addcmnt">
                <h3>Add Comment:</h3><br>
                <form method="POST">
                    <span>Name:</span>
                    <input type="text" name="appName" required><br><br>
                    <span>Comment:</span><br><br>
                    <textarea name="comment" cols="70" rows="5" required></textarea><br><br>
                    <button type="submit" name="submit_comment" class="cmnt-btn">Submit</button>
                </form>
    </section>

    <section class="cmnt-list">
                <h3>All Comments:</h3><br>
                  <?php if ($comments_result->num_rows > 0): ?>
                    <?php while($row = $comments_result->fetch_assoc()): ?>
                        <div class="comment_details">
                            <h4><?php echo "App Name : ".$row['app_name']; ?></h4><br>
                            <h4><?php echo "Comment : ".$row['comment']; ?></h4><br>

                            <!-- Edit Comment Form -->
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <label>Edit App Name :</label><input type="text" name="appName" required><br><br>
                                <label>Edit Comment: </label><textarea name="comment" cols="50" rows="3" required></textarea><br>
                                <button type="submit" name="update_comment" class="updatebtn">Update</button>
                            </form>

                            <!-- Delete Comment Form -->
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_comment" class="deletebtn">Delete</button><br><br>
                            </form>
                        </div>                     
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No comments yet!</p>
                <?php endif; ?>
    </section>



    <header>
            <div class="header-container">
                <nav>
                    <a href="#">Home</a> | <a href="#" class="active">Contact US</a>
                </nav>
            </div>
    </header>

</body>
</html>




<?php
    require_once('bookhubfooter.php');
?>