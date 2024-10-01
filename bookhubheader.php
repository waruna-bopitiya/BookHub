<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/asserts/css/BookHubstylesheet.css">
    <title>
            <?php echo $title; 
            ?> | BookHub</title>
    <script src="src/asserts/js/javascript.js"></script>
    <script src="https://kit.fontawesome.com/2fd38a9fa7.js" crossorigin="anonymous"></script>
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
            <img src="src\asserts\images\title bar\icons8-account-30.png" alt="login" width="25px" height="25px">
            sign in / sign up
        </div>



    </div>

    
    
    
    
    <div class ="menu_bar">
        <!-- This is the division which include search bar and menu, cart.............. -->
        
        <div class="logo_menubar">
            <img src="src\asserts\images\bookhublogotransparent.png" alt="LOGO" width="200px" height="200px" margin-bottom="0px" >

        </div>

        <div class="searchandmenu">
                    <form action="searchresult.php" method="GET" onsubmit="return validatesearch()">
                     <div class="search-container">
                        <input type="text" class="search-box" placeholder="Search in BookHub" name="searchname" id="searchname" value="<?php if (isset($_GET['searchname'])){echo $_GET['searchname'];}?>" >
                        <input type="submit" class="search-button" name="submit" value="Search" >  
                     </div></form>



                 <div class="menu">
                    <ul>
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="#">Categories</a></li>
                        <li class="menu-item"> <a href="#">About Us</a></li>
                        <li class="menu-item"><a href="#">Contact Us</a></li>
                        <li class="menu-item"><a href="#">Return Policy</a></li>
                    </ul>
                </div>
         </div>

         <div class="logo_menubar1">
                 <img src="src\asserts\images\menu bar\cart.png" alt="LOGO" width="100px" height="100px" margin-bottom="0px" >
                    <h3>My Cart</h3>
         </div>
            
        </div>


    </div>

</body>
</html>