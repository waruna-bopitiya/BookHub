<?php $title="Shopping Cart"; 
    require_once('bookhubheader.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="src/asserts/css/cart.css">
</head>

<body>


    <h1>Your Shopping Cart......</h1>

    <!--book1---------------------------------------------------------------------------------------------------------------->
    

        <div class="book1">
            <div class="class0">
                <input type="checkbox" id="checkbox1">
                <img src="./images/img1.jpeg" alt="book image">
            </div>
                
            <div class="class1">
                <h2>Forget me not</h2><br>
                <p>It’s not easy to love broken people, Yumi San. They have to be 
                    hugged tightly. With gentle but firm love. But those sharp-edged 
                    broken pieces hurt the loved one who embraces them. He is also cut. 
                    I am sure, “Love is a sacrifice, a man with a kind eyebrow who fell 
                    in love with a broken woman for the first time in this world. A woman 
                    with a big heart who loved a broken man. 
                </p>
            </div>
            
            <div class="class6">
                <legend>
                <div class="class2">   
                    <h3>Rs.2500/=</h3>
                </div>
                
                <div class="class3">
                    <h4>Qty</h4>
                </div>
                
                <div class="class4" id="set1">
                    <input type="button" value="-" class="decrement">
                    <input type="text" value="1" class="value" readonly> <!-- Make input read-only -->
                    <input type="button" value="+" class="increment">
                </div>
                
                <div class="class5">
                    <div class="heart" id="heart1"></div>
                    <button class="delete">🗑</button>
                </div>
                </legend>
            </div>
        
        </div>


        




    
    
    </div>

    <!--summary 1-------------------------------------------------------------------------------------------------------------------->

    
    <!-- <div id="message1" class="summary">
        <h2>Forget me not</h2>
        <div class="cal">
            <h5>Subtotal : <span>Rs. 2500.00/=</span></h5>
            <h5>Shipping : <span>Rs. 300.00/=</span></h5>
            <h5>Tax : <span>Rs. 50.00/=</span></h5>
            <br><hr><br>
            <h5>Estimate Total: <span>Rs. 2850.00/=</span></h5>
            <div class="coupon">
                <h5>Enter Coupon code : <span><input type="text"></span></h5> 
                <button>Apply</button>
            </div><br>
            <a href="order.html"><button class="checkout"><b>Checkout</b></button></a>
        </div>
    </div>   -->

    

    <script src="src/asserts/js/cart.js"></script>

</body>
</html>

<footer><?php
include_once('bookhubfooter.php')
?></footer>
