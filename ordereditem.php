

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

$sql = "SELECT books.bookID, books.bookName, books.price , books.image , cart.qty FROM books INNER JOIN cart ON books.bookID = cart.bookID WHERE cart.userID = '$userID' AND cart.status = 'ordered'";
        
$result = $con->query($sql);
if ($result->num_rows > 0){
?>

<div class="pgcontain"> 
<div class="side1"> 
<br>
        
        <br>
        <br>

        <h1 style="text-align:center"> Ordered Items</h1>
<?php

    if ($result->num_rows > 0) {
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
                        <form action="orderdelete.php" method="POST">
                            <button class="delete" type="submit" name="submit"><b>Cancel Order</b></button>
                            <p>Quantity : <?= $row['qty'] ?></p>
                            <input type="hidden" name="bookID" value="<?= $row['bookID'] ?>">
                            <input type="hidden" name="userID" value="<?= $userID ?>">
                        </form>
                        
                    </h4>
            </div>
        </div>
    
        
<?php
    }}}
else{
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
<h1 style="text-align: center;">You have not ordered any book</h1>
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

?>