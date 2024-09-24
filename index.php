<?php $title="Home Page"; ?>
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
    
<div>


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
                     <div class="search-container">
            
                        <input type="text" class="search-box" placeholder="Search in BookHub">
                        <button class="search-button"> <img src="src\asserts\images\menu bar\icons8-search-50.png" width="25px" height="25px">  </button>
                     </div>



                 <div class="menu">
                    <ul>
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="category.php">Categories</a></li>
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

    <div class="banner">
        <div class="bannerimg">
            <button onclick="previous()" id="prvsbanner1"><</button>
            <img src="src/asserts/images/banners/b1.jpg" alt="Advertisment Banner" width="1920px" height="400px" id="img1"> 
            <button onclick="next()" id="nxtinbanner1">></button>

        </div>
    </div>

    <div class="trendingBooks">
        <div class="trending_title">
            <h2 >TRENDING BOOKS</h2>
        </div>

        <div class="trnd_bk_list">

            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  
            <div class="bkcontainer"><img src="src\asserts\images\Books\6249468706.jpg" width="100%" height="100%" ><div class="bkname">Sample Book<br>Rs.500.00</div></div>  

            
        </div>
        
    </div>
    <div class="discount">
        <div class="discountads">
            <ul>
                <li><h1>20% <br> Discount <br> <h5>For seleceted books</h5></h1></li>
                <li style="border-left: #ffffff 5px solid; border-right: #ffffff 5px solid;"><h1>3 in 1 <br> Discount <br> <h5>*Conditions apply</h5></h1></li>
                <li><h1 style="font-size: 60px;">DON'T MISS <br> <h5> such a deal</h5> </h1> </li>
            </ul>
            
        </div>

    </div>

    <!-- <div class="salecontainer">
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
        <div class="bkcntain"><div class="bksalename">Sample book</div><div class="booksitem"></div><div class="bktd">Rs300</div></div>
    
    </div> -->

    <div class="salecontainer">
<!-- ______________________________________________________________________ -->
            <?php
                     require_once('config.php');

                     $sql = "SELECT bookName , image, price FROM books";

                        $result = $con->query($sql);

                       

                       while ($row =$result->fetch_assoc()) {
                        echo "<div class='bkcntain'><div class='bksalename'>";
                           echo "<h3>".$row['bookName']."</h3>";
                           echo "</div><div class='booksitem'><cenetr><img src='src/asserts/images/upimages/".$row['image']."' width='100%' height='100%'></center></td></div><div class='bktd'>";
                           echo "Rs. ".$row['price'];
                       
                       
                       
                       echo "</div></div>";
                    }


            ?>
            </div>
    <!-- _____________________________________________________________________ -->

    <div class="banner2">
        <div class="banner2Content">
            <i class="fa-solid fa-truck fa-2xl" style="color: #00345c;"></i>
            <h4>ISLAND WILDE<br>   FREE DELEVERY</h4>
        </div>
        <div class="banner2Content" style="border-right: #00345c 5px solid; border-left: #00345c 5px solid">
            <i class="fa-solid fa-shield-halved fa-2xl" style="color: #00345c;"></i>
            <h4>SECURE <br> PAYMENT</h4>
        </div>
        <div class="banner2Content">
            <i class="fa-solid fa-tag fa-2xl"style="color: #00345c;"></i>
            <h4>LOWEST <br> PRICE</h4>
        </div>
    </div>

    <div class="footer">
        <div class="logo">
            <img src="src\asserts\images\bookhublogotransparent.png" alt="LOGO" width="200px" height="200px" margin-bottom="0px" >
        </div>
        <div class="copywrite">
            Copyright 2024- BOOKHUB - All Rights Reserved. Concept, <br>
            Design & Development By Group10.1(group1)
        </div>
    </div>

    

</div>
</body>
</html>

<!-- lmgld nrgn rnoerlk nerhoen rlern  -->