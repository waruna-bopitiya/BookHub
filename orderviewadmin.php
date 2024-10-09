<?php
require_once('header.php');
?>

<link rel="stylesheet" href="src/asserts/css/pub_added.css">
<div class="uploadbooktitle">
    <a href="" class="button1" style="background-color: #272727;">Ordered book List</a>
</div>

<?php
if (isset($_POST['delete'])) {
    require 'config.php';
    $dltID = $_POST["bookID"];
    $sql = "DELETE FROM books WHERE bookID='$dltID'";
    $cp = mysqli_query($con, $sql);
}

require 'config.php';

// Start HTML table for output
echo "<div class='table1'>";
$sql5 = "SELECT cart.orderID, delevery.orderedDate, cart.bookID, cart.qty, cart.userID, delevery.amount, delevery.address, delevery.tpnumber, books.bookName, books.price 
         FROM cart 
         INNER JOIN delevery ON cart.orderID = delevery.orderID 
         INNER JOIN books ON cart.bookID = books.bookID 
         WHERE cart.status = 'ordered' ORDER BY cart.orderID DESC";

$result5 = $con->query($sql5);

// Create table with column headers
echo "<table><thead><tr><th>Order ID</th><th>Ordered Date</th><th>User ID</th><th>Book ID</th><th>Book Name</th><th>Quantity</th><th>Book Price</th><th>Total Amount</th><th>Address</th><th>Phone Number</th></tr></thead><tbody>";

while ($row = $result5->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['orderID'] . "</td>";
    echo "<td>" . $row['orderedDate'] . "</td>";
    echo "<td>" . $row['userID'] . "</td>";
    echo "<td>" . $row['bookID'] . "</td>";
    echo "<td>" . $row['bookName'] . "</td>";
    echo "<td>" . $row['qty'] . "</td>";
    echo "<td> Rs." . $row['amount'] . "</td>";
    echo "<td> Rs." . $row['qty']*$row['amount'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['tpnumber'] . "</td>";
    
    echo "</tr>";
}

echo "</tbody></table>";
echo "</div>";

mysqli_close($con);
?>
