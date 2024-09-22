<?php
        
        require_once 'config.php';
        require_once 'header.php';
        echo "<div class='table' style='text-align:center' margin-top: 300px>";
        $sql = "SELECT bookName , authorName FROM books";

        $result = $con->query($sql);

        while ($row =$result->fetch_assoc()) {
            echo $row['bookName'] . "<br>";
        }
        echo "</div>";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="added" style="border: black 2px solid">
                    lsknvlksndlvksnldkvnsldv
        </div>

        <div class="added" style="border: black 2px solid">
                    lsknvlksndlvksnldkvnsldv
        </div>

        <div class="added" style="border: black 2px solid">
                    lsknvlksndlvksnldkvnsldv
        </div>
    </body>
    </html>