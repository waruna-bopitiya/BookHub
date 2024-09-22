<?php
        
        require_once 'config.php';

        $sql = "SELECT bookName , authorName FROM books";

        $result = $con->query($sql);

        while ($row =$result->fetch_assoc()) {
        
            echo $row['bookName'] . "<br>";
        }

    ?>