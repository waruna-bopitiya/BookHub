<?php $title="Home Page"; 
    require_once('bookhubheader.php');

?>


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