<?php
        
        require_once 'config.php';
        require_once 'header.php';
        echo "<div class='table1'>";
        $sql = "SELECT bookID ,bookName , authorName , price , category FROM books";

        $result = $con->query($sql);
        echo "<table border='1px'>";
        while ($row =$result->fetch_assoc()) {

            echo "<tr><td>" .$row['bookID']."</td>";
            echo "<td>" .$row['bookName']."</td>";
            echo "<td>" .$row['authorName']."</td>";
            echo "<td>" .$row['price']."</td>";
            echo "<td>" .$row['category']."</td></tr>";
        }

        echo "</table>";

        echo "</div>";
    ?>
