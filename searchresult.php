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
                                        <td class="image"><img src="src/asserts/images/upimages/<?= $items['image']; ?> " width="100px" height="150px" border-radius="20px";> </td> <br>
                                        </div>
                                        
                                        <div class="s_item_text">
                                        <td class="bookname"><h2><?= $items['bookName']; ?></h2></td><br>
                                        <td class="author"><h4><?= $items['authorName']; ?></h4></td><br>
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