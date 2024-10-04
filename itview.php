<?php $title="Item"; 

include_once('bookhubheader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/asserts/css/itview.css">
</head>
<body>

<?php


        require_once('config.php');
        $bookID = $_GET["bookID"];
        $sql = "SELECT bookID, bookName, authorName, price, category, description, image FROM books WHERE bookID = '$bookID'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            $name = $row['bookName'];
            $authorname = $row['authorName'];
            $price = $row['price'];
            $category = $row['category'];
            $description = $row['description'];
            $image = $row['image'];

        } 
            else {
            echo "No book found with this ID";
            exit();
        }

?>


    <div class="contain">
             
            <div class="item1">
            
            <?php 
             echo "<img src='src/asserts/images/upimages/" . $row['image'] . "' width='300px' height='450px'>"; 
            ?>

                
             </div>
             
             <div class="item2">
                <?php 
                echo "<h1>" . $row['bookName'] . "</h1>"; 
                ?>
                <?php 
                echo "<h3> Author : " . $row['bookName'] . "</h3>"; 
                ?>
                <?php 
                echo "<h3> Category : " . $row['category'] . "</h3>"; 
                ?>
                <?php 
                echo "<h4>" . $row['description'] . "</h4>"; 
                ?>
                <?php 
                echo "<h2> Rs. " . $row['price'] . "</h3>"; 
                ?>

                <form action="cartinsert.php" method="POST" enctype="multipart/form-data">
                    <div class="qty">
                        <label for="qty" class="qty" id="qty">Quantity :</label>
                         <input type="number" value="1" id="qty" name="qty">
                    </div>
                    

                <div class="buttons">
            
                    
                        
                        <input type="hidden" value="<?=$bookID?>" id="bookID" name="bookID">
                        <input type="submit" value="Add to Cart" name="submit" class="addtocart">
                        </form>

                    
                    <form action="">
                        <input type="submit" value="Buy it Now" class="buyitnow">
                    </form>
                </div>


            </div>
    </div>
</body>
</html>

<footer><?php
include_once('bookhubfooter.php')
?></footer>
