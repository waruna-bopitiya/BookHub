<div class="uploadbooktitle">
        <h2>Uploaded Books details</h2>
    </div>
<?php
        
        require_once 'config.php';
        require_once 'header.php';
        echo "<div class='table1'>";
        $sql = "SELECT bookID , bookName , image , authorName , price , category FROM books";

        $result = $con->query($sql);
        

        
        echo "<table><thead> <tr><th>Book ID</th><th>Book Name</th><th>Image</th><th>Author Name</th><th>Price</th><th>Category</th></tr></thead><tbody>";
        
        
        while ($row =$result->fetch_assoc()) {

            
            echo "<tr><td>" .$row['bookID']."</td>";
            echo "<td>" .$row['bookName']."</td>";
            echo "<td>" ."<img src='src/asserts/images/upimages/".$row['image']."' width='50px' height='75px'></td>";
            echo "<td>" .$row['authorName']."</td>";
            echo "<td>" .$row['price']."</td>";
            echo "<td>" .$row['category']."</td></tr>";
        }

        echo "</tbody></table>";

        echo "</div>";
    ?>
