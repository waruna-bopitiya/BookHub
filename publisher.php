
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src\asserts\css\publisher.css">
    <title>Publisher | Boookhub</title>
    <script src="src\asserts\js\javascript.js"></script>
</head>
<body>

    <div class="title_bar">
        <!-- This is the main division we allocated to show as the wire frame -->


            <div class="title_grp" style="justify-content: left;"><!-- this is the telephone number  and emailar -->
            
                 <img src="src\asserts\images\title bar\icons8-phone-30.png" alt="TP" width="20px" height="20px" >
                +94764936441
                <img src="src\asserts\images\title bar\icons8-email-30.png" alt="Email" width="25px" height="25px" style="margin-left: 20px; margin-right: 5px;">
                 bookhub2024@gmail.com
        </div> 

        
            <div class="title_grp" style="justify-content: center;"> <!-- this is the BookHub name -->
            BookHub
            </div>


            <div class="title_grp" style="justify-content: right;"><!-- this is the BookHub name -->
                 <img src="..\images\title bar\icons8-account-30.png" alt="login" width="25px" height="25px">
                     sign in / sign up
            </div>



    </div>


    <div class="menubar">
             <div class="menuimage">
                     <img src="src\asserts\images\bookhublogotransparent.png" alt="logo" width="200px" height="200px">
             </div>
            <div>
                     <h1>Publisher potral</h1>
            </div>
           

    </div>

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
                          <option value="NFiction">Non-Fiction</option>
                          <option value="MChildren">MercedesChildren's Books</option>
                          <option value="ae">Academic & Educational</option>
                          <option value="lh">Lifestyle & Hobbies</option>
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

    
    
</body>
</html>
