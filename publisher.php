<?php
require_once('header.php')
?>

<link rel="stylesheet" href="src/asserts/css/publisher.css">
<script src="src/asserts/js/publisher.js"></script>
    <div class="uploadbooktitle">

            <a href="publisher.php" class="button1">Add a Book</a>
            <a href="pub_added.php" class="button2">Added Book List</a>

    </div>
        
    <form action="publisherinsert.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
    <div class="form">
         
        <div class="form1">
            <p>Book Name</p>
            <input type="text" name="bookname" placeholder="Book Name" class="getinput" id="bookname">
            <p>Author Name</p>
            <input type="text" name="authorname" placeholder="Author Name" class="getinput" id="authorname">
            
            <div class="priceandcate">

                <div>   
                        <p>Price</p>
                        <label for="number">Rs.</label>
                        <input type="text" name="price" id="price" placeholder="Price" class="getinput" style="width: 100px"; onblur="formatPrice()">
                         <input type="hidden" name="formattedPrice" id="formattedPrice" />
                        <script>
                            
                            function formatPrice() {
                            let priceField = document.getElementById("price");
                            let priceValue = parseFloat(priceField.value);
    
                            if (!isNaN(priceValue)) {
                            
                            priceField.value = priceValue.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                            }
                        </script>
                </div>
                        
                <div>
                        <p style="margin-right: 30px;">Category</p>
                            <label for="category"></label>
                        <select name="category" id="category" class="getinput" style="width: 200px; height: 40px; margin-right: 30px;">
                          <option value="Fiction">Fiction</option>
                          <option value="Non-Fiction">Non-Fiction</option>
                          <option value="MercedesChildren''s Books">MercedesChildren's Books</option>
                          <option value="Academic & Educational">Academic & Educational</option>
                          <option value="Lifestyle & Hobbies">Lifestyle & Hobbies</option>
                        </select>
                </div>
                        
            </div>
            

            <p>Add a description</p>
            <textarea type="text" name="description" id="description" class="getinput" style="width: 400px; height: 80px; padding: 10px;"></textarea>

            
        </div>

    
        <div class="form2">
            <label for="imageupload1" class="imageupload1" id="hide"><p>Click here to upload image</p>
            <img id="updateimg" src=""></label>
            <input type="file" name="image" id="imageupload1" accept="image/*" onchange="preview_image(event)">
            <input type="hidden" name="publishdate" id="publishdate" > 
        </div>
    </div>

    <script>
        publishdate = new Date(); 
        document.getElementById("publishdate").value = publishdate;

        
    
    </script>

    <div class="submit">    
            <label for="submitbtn1" class="submitbtn1">Submit</label>
            <input type="submit" name="submit" value="Submit" id="submitbtn1">
    </div>

    
    </form>


