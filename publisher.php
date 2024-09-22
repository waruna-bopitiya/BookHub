<?php
require_once('header.php')
?>

    <div class="uploadbooktitle">
        <h2>Upload Book details</h2>
    </div>
    
    <form action="publisherinsert.php" method="POST" enctype="multipart/form-data">
    <div class="form">
        
        <div class="form1">
            <p>Book Name</p>
            <input type="text" name="bookname" placeholder="Book Name" class="getinput">
            <p>Author Name</p>
            <input type="text" name="authorname" placeholder="Author Name" class="getinput">
            
            <div class="priceandcate">

                <div>   
                        <p>Price</p>
                        <label for="number">Rs.</label>
                        <input type="number" name="price" placeholder="Price" class="getinput" style="width: 100px;">
                </div>
                        
                <div>
                        <p style="margin-right: 30px;">Category</p>
                            <label for="category"></label>
                        <select name="category" id="category" class="getinput" style="width: 200px; height: 40px; margin-right: 30px;">
                          <option value="Fiction">Fiction</option>
                          <option value="Non-Fiction">Non-Fiction</option>
                          <option value="MercedesChildren's Books">MercedesChildren's Books</option>
                          <option value="Academic & Educational">Academic & Educational</option>
                          <option value="Lifestyle & Hobbies">Lifestyle & Hobbies</option>
                        </select>
                </div>
                        
            </div>
            

            <p>Published Date</p>
            <input type="date" name="publishdate" id="" class="getinput">

            
        </div>

        <div class="form2">
            <label for="imageupload1" class="imageupload1" id="hide"><p>Click here to upload image</p>
            <img id="updateimg" src=""></label>
            <input type="file" name="image" id="imageupload1" accept="image/*" onchange="preview_image(event)">
            
        </div>
    </div>

    <div class="submit">    
        <label for="submitbtn1" class="submitbtn1">Submit</label>
          <input type="submit" name="submit" value="Submit" id="submitbtn1">
    </div>
    </form>

