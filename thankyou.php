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
        <?php
        require_once('config.php');
        $sqli = "UPDATE cart SET status = 'ordered' WHERE userID = '$userID' AND status = 'cart'";
        $result = $con->query($sqli);

        if(isset($_POST['submit'])) {
            $sql3 = "INSERT INTO delevery (userID,amount,status,address,tpnumber) VALUES ('$userID','$fulltotal','ordered','$homenumber $city $street $postalcode $province','$phoneNumber')"; 
            $result2 = $con->query($sql3);

        }

        $sql2 = "SELECT * FROM delevery WHERE userID = '$userID' AND amount = '$fulltotal'";
        $result2 = $con->query($sql2);

        while ($row = $result2->fetch_assoc()) {
            $orderID = $row['orderID'];
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 style="text-align: center;">Thank you for your order <br> Your order has been placed <br> We will contact you shortly <br> Your Order ID is : <?php echo $orderID ?><br><a href='ordereditem.php'><button type='hidden' class='loginbtn' name='profile' id='submit'>ORDERED ITEMS</button></a></h1>
    
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
       
        </body>

        

<footer><?php
include_once('bookhubfooter.php')
?></footer>