

<?php $title="Shopping Cart"; 
    require_once('bookhubheader.php');

    if(isset($_SESSION["email"])) { 

        $email = $_SESSION['email'];
        require_once('config.php');
            $sql3 = "SELECT * FROM user WHERE email = '$email' And userType='client'";

        $result3 = $con->query($sql3);

        if ($result3->num_rows > 0) {

            $row = $result3->fetch_assoc();

            $userID = $row['userID'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $email = $row['email'];
            $phoneNumber = $row['phoneNumber'];
            $pswd = $row['pswd'];
            $homenumber = $row['homenumber'];
            $city = $row['city'];
            $street = $row['street'];
            $postalcode = $row['postalcode'];
            $province = $row['province'];
            

        } 
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="src/asserts/css/cart.css">
</head>

<body>  
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <?php

$sql = "SELECT books.bookID, books.bookName, books.price , books.image , cart.qty FROM books INNER JOIN cart ON books.bookID = cart.bookID WHERE cart.userID = '$userID' AND cart.status = 'cart'";
        
$result = $con->query($sql);
if ($result->num_rows > 0){
?>

<div class="pgcontain"> 
<div class="side1"> 
<br>
        
        <br>
        <br>
<?php

$subtotal=0;
    while ($row = $result->fetch_assoc()) {
?>

        
       
        <div class="itemcontainer">
            <div class="image">
                <img src="src/asserts/images/upimages/<?= $row['image'] ?>">
            </div>

            <div class="details">
                    <h2><?=$row['bookName']?></h2>
                    <p>Rs.<?=$row['price']?></p>
            </div>

            <div class="actions">
                    <h4>
                        <form action="cartdelete.php" method="POST">
                            <button class="delete" type="submit" name="submit"><b>Delete</b></button>
                            <p>Quantity : <?= $row['qty'] ?></p>
                            <input type="hidden" name="bookID" value="<?= $row['bookID'] ?>">
                            <input type="hidden" name="userID" value="<?= $userID ?>">
                        </form>
                        
                    </h4>
            </div>
        </div>
    
        
<?php
   $subtotal=$row['price']*$row['qty']+ $subtotal;

}

    $fulltotal = $subtotal;

?>
</div> 

    <div class="side2">   
                <div class="payment">

                            <div class="texts">
                                    <h3>Payment Summary</h3>
                                    <br>
                            </div>

                            <div class="summery">
                                <div class="class1">
                                    <h3>Sub total <span class="price"> Rs. <?=$subtotal?></span></h3>
                                    <h3>Delivery <span class="price">  Rs. 350</span></h3>
                                    <h3>Full Payment <span class="price">Rs. <?=$subtotal+350?></span></h3>
                                </div>
                            </div>

                            <div class="class2">
                                <form action="payment.php" method="POST">
                                    
                                    <input type="hidden" name="userID" value="<?=$userID?>">
                                    <input type="hidden" name="email" value="<?=$email?>">
                                    <input type="hidden" name="phoneNumber" value="<?=$phoneNumber?>">
                                    <input type="hidden" name="pswd" value="<?=$pswd?>">
                                    <input type="hidden" name="homenumber" value="<?=$homenumber?>">
                                    <input type="hidden" name="city" value="<?=$city?>">
                                    <input type="hidden" name="street" value="<?=$street?>">
                                    <input type="hidden" name="postalcode" value="<?=$postalcode?>">
                                    <input type="hidden" name="province" value="<?=$province?>">
                                    <input type="hidden" name="subtotal" value="<?=$subtotal?>">
                                    <input type="hidden" name="fulltotal" value="<?=$fulltotal?>">

                                <button type="submit" name="submit" class="placeorder">Place Order</button>
                                </form>
                            </div>

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


<?php 
        }
        else { ?>
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
    <h1 style="text-align: center;">Cart is Empty! <br> Please add items to cart!</h1>
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
        }
}
else {
?>
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
    <h1 style="text-align: center;">Please Log in to view cart</h1>
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
<?php }?>

</body>
</html>

<footer><?php
include_once('bookhubfooter.php')
?></footer>
