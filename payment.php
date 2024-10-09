    <?php $title="Item"; 
        include_once('bookhubheader.php');
    
        require_once('config.php');
        
        $address = $_POST["address"];
        $userID = $_POST["userID"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $pswd = $_POST["pswd"];
        $homenumber = $_POST["homenumber"];
        $city = $_POST["city"];
        $street = $_POST["street"];
        $postalcode = $_POST["postalcode"];
        $province = $_POST["province"];
        $fulltotal = $_POST["fulltotal"];
        $subtotal = $_POST["subtotal"];

        ?>

<link rel="stylesheet" href="src/asserts/css/payment.css">
<br>
<br>
<br>
<br>
               <?php


if ($homenumber == "" || $street == "" || $city == "" || $province == "" || $postalcode == "" || $phoneNumber == "") {
                 
                 
                 
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
    <h1 style="text-align: center;">You not set the delevery information <br> Please go to profile and set!<a href='profile.php'><br><button type='hidden' class='loginbtn' name='profile' id='submit'>PROFILE EDIT</button></a></h1>
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
    <br><?php
               }

else {
?>
<div class="side2">   
  
  

    <div class="payment">
        <h2>
            Your address
        </h2>
        
        <p class="address">
            <?=$homenumber?>, <br>
            <?=$street?>,<br>
            <?=$city?>, <br>
            <?=$province?>, <br>
            <?=$postalcode?>. <br>
            <?=$phoneNumber?> <br>
            
        </p>
        <div class="editbtn">
            <a href="profile.php"><button class="">Edit</button></a>
        </div>
    </div>
                <div class="payment">

                            <div class="texts">
                                    <h3>Payment Summary</h3>
                                    <br>
                            </div>

                            <div class="summery">
                                <div class="class1">
                                    <h3>Sub total <span class="price"> Rs. <?=$fulltotal?></span></h3>
                                    <h3>Delivery <span class="price">  Rs. 350</span></h3>
                                    <h3>Full Payment <span class="price">Rs. <?=$fulltotal+350?></span></h3>
                                </div>
                            </div>

                            <div class="class2">
                                <form action="thankyou.php" method="POST">
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
                                 
                                <button type="submit" name="submit" class="placeorder">Confirm Order</button>
                                </form>
                            </div>

                </div>
    </div>

    <h3 style="color:red; text-align:center;" >
        *** After you confirm the order we will contact you with in 24 hours.***
        <br>
        <br>
    </h3>

 <?php } ?>   <footer><?php
include_once('bookhubfooter.php')
?></footer>