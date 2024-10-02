<?php
require_once('header.php')
?>

<link rel="stylesheet" href="src/asserts/css/pub_added.css">
<div class="uploadbooktitle">

<a href="publisher.php" class="button1">Add a Book</a>
<a href="pub_added.php" class="button2">Added Book List</a>

</div>
<?php


     
        if(isset($_POST['delete'])) {
            require 'config.php';
            $dltID = $_POST["bookID"];
            $sql = "DELETE FROM books WHERE bookID='$dltID'";
            $cp = mysqli_query($con, $sql);
           
            }
        

            
        require 'config.php';

        echo "<div class='table1'>";
        $sql = "SELECT bookID , bookName , image , authorName , price , category FROM books";

        $result = $con->query($sql);
        
        

        
        echo "<table><thead> <tr><th>Book ID</th><th>Book Name</th><th>Image</th><th>Author Name</th><th>Price</th><th>Category</th><th>Action</th><th>Edit</th></tr></thead><tbody>";
        
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['bookID'] . "</td>";
            echo "<td>" . $row['bookName'] . "</td>";
            echo "<td><img src='src/asserts/images/upimages/" . $row['image'] . "' width='50px' height='75px'></td>";
            echo "<td>" . $row['authorName'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
        
            
            echo "<td>
                    <form method='POST' action=''>
                        <input type='hidden' name='bookID' value='" . $row['bookID'] . "'>
                        <input type='submit' name='delete' value='Delete' id='dltbtn'>
                    </form>
                  </td>";
        
            
            echo "<td>
                    <form method='GET' action='editdata.php'>
                        <input type='hidden' name='bookID' value='" . $row['bookID'] . "'>
                        <input type='submit' name='edit' value='Edit' id='Edit'>
                    </form>
                  </td>";
        
            echo "</tr>";
        }
        


        

        echo "</tbody></table>";

        echo "</div>";

        mysqli_close($con);
    ?>




