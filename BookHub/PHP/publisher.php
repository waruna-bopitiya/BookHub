
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/publisher.css">
    <title>Publisher | Boookhub</title>
</head>
<body>
    <?php
    require 'config.php';
    ?>

    <div class="title_bar">
        <!-- This is the main division we allocated to show as the wire frame -->


            <div class="title_grp" style="justify-content: left;"><!-- this is the telephone number  and emailar -->
            
                     <img src="..\images\title bar\icons8-phone-30.png" alt="TP" width="20px" height="20px" >
                    +94764936441
                    <img src="..\images\title bar\icons8-email-30.png" alt="Email" width="25px" height="25px" style="margin-left: 20px; margin-right: 5px;">
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
                     <img src="../images/bookhublogotransparent.png" alt="logo" width="200px" height="200px">
             </div>
            <div>
                     <h1>Publisher potral</h1>
            </div>
           

    </div>

    <div class="uploadbooktitle">
            <h2>Upload Book Details</h2>
        </div>
    
    <form action="publisherinsert.php" method="POST">
    <div class="form">
        
        <div class="form1">
            
            <p>Book Name</p>
            <input type="text" name="bookname" placeholder="Book Name" class="getinput">
            <p>Author Name</p>
            <input type="text" name="authorkname" placeholder="Author Name" class="getinput">
            <p>Price</p>
            <label for="number">Rs.</label>
            <input type="number" name="price" placeholder="Price" class="getinput" style="width: 100px;">
            <p>Published Date</p>
            <input type="date" name="publishdate" id="" class="getinput">
            
            
        </div>

        <div class="form2">
            <label for="imageupload1" class="imageupload1">Click here to upload image</label>
            <input type="file" name="image" id="imageupload1" >
        </div>
        
       

        
    </div>

    <div class="submit">    
        <label for="submitbtn1" class="submitbtn1">Submit</label>
          <input type="submit" name="submit" value="Submit" id="submitbtn1">
    </div>
    </form>

    
</body>
</html>
