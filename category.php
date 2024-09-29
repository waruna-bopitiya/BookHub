<?php $title="Catregory"; ?>
<?php
    require_once('bookhubheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/asserts/css/category.css">
    <script src="src/asserts/js/category.js"></script>
    <title>Document</title>
</head>
<body>
<div class="category_bar">
    <div class="category-item-box">
        <ul>
            <li><a href="#" id="fiction" class="category_link" onclick="loadBooks('fiction')">Fiction</a></li>
            <li><a href="#" id="children" class="category_link"onclick="loadBooks('children')">Children's Books</a></li>
            <li><a href="#" id="science" class="category_link" onclick="loadBooks('science')">Science</a></li>
            <li><a href="#" id="education" class="category_link" onclick="loadBooks('education')">Education</a></li>
            <li><a href="#" id="novels" class="category_link" onclick="loadBooks('novels')">Novels</a></li>
            <li><a href="#" id="short_stories" class="category_link" onclick="loadBooks('short_stories')">Short Stories</a></li>
            <li><a href="#" id="magazines" class="category_link" onclick="loadBooks('magazines')">Magazines</a></li>
            <li><a href="#" id="all" class="category_link" onclick="loadBooks('all')">Show All</a></li>

        </ul>
    </div>
</div>
<!--Category content-->
<div class="category_content">
    <h5 style="color:blue; text-align:center;" id="category-heading">Best Books</h5>
    <div class="category_grid" id="book_grid">
        <!-- Book items will be dynamically inserted here -->
    </div>
</div>

    



</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    require_once('bookhubfooter.php');
?>

