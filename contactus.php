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
            <p>Bookazone Pvt Ltd is proud to present www.bookhub.lk, the pioneer, all online bookstore in Sri Lanka. We offer the most extensive range of books for sale in Sri Lanka, sourced from THE USA, Europe to the Far East and India. A collection of old and rare works hitherto not offered on most online bookstores, are also available for the discerning bibliophile.</p>
            <p>www.bookhub.lk is owned and operated by Sri Lankans who are experienced e-commerce entrepreneurs and book lovers themselves. We provide a service that satisfies a long-awaited need of other book lovers in Sri Lanka and beyond: access to purchasing all kinds of books from anywhere in the island. Our commitment is to provide an excellent and dedicated service that ensures ease of ordering and payment and is complemented with prompt and free delivery of the widest range of titles to our customers.</p>
            <p>Our online order service is simple with highly secure methods of payment, which includes an innovative, local method to enable customers who do not wish to pay by credit card, to buy books from www.books.lk. We have introduced a method by which customers can pay for the books they order online, with a physical payment at a bank.</p>
        </section>

        <section class="contact-info">
            <div class="info-item">
                <div class="icon">
                    <img src="location-icon.png" alt="Location Icon">
                </div>
                <div class="info-text">
                    <h2>Site</h2>
                    <p><a href="http://www.books.lk">www.bookhub.lk</a></p>
                </div>
            </div>

            <div class="info-item">
                <div class="icon">
                    <img src="phone-icon.png" alt="Phone Icon">
                </div>
                <div class="info-text">
                    <h2>Contact Number</h2>
                    <p>+94 71 110 2929</p>
                </div>
            </div>

            <div class="info-item">
                <div class="icon">
                    <img src="mail-icon.png" alt="Mail Icon">
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
                    <span>App Name:</span>
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