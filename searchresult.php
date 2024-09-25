<?php $title="Search result :"; 
    require_once('bookhubheader.php');
?>
    <link rel="stylesheet" href="src/asserts/css/searchresult.css">
    <div class="searchresult">
        <?php
            require_once('config.php');
              

            if(isset($_GET['searchname']))
            {
                $searchname = $_GET['searchname'];

                $query = "SELECT * FROM books WHERE CONCAT(image,bookName,authorName,category) LIKE '%$searchname%' ";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $items)
                    {
                        ?>          
                                    <div class="sitem">
                                    <tr>  
                                        
                                        <div class="s_item_image">
                                        <td class="image"><img src="src/asserts/images/upimages/<?= $items['image']; ?>" </td> <br>
                                        </div>
                                        
                                        <div class="s_item_text">
                                        <td class="bookname"><?= $items['bookName']; ?></td><br>
                                        <td class="author"><?= $items['authorName']; ?></td><br>
                                        <td class="category"><?= $items['category']; ?></td>
                                        </div>

                                    </tr>
                                    </div>
                                    <?php
                                }
                 }
                            else
                            {
                                ?>
                                    <tr>
                                        <td colspan="4">No Record Found</td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>

            
    </div>
<footer>
<div class="footer">
<?php $title="Search result :"; 
    require_once('bookhubfooter.php');
?>
</div>
                    </footer>