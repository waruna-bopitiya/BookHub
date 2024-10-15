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
$sql5 = "SELECT * FROM user";

$result5 = $con->query($sql5);

// Create table with column headers
echo "<table><thead><tr><th>User ID</th><th>User Name</th><th>E-mail</th><th>Phone Number</th><th>Adress</th><th>User Type</th></tr></thead><tbody>";

while ($row = $result5->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['userID'] . "</td>";
    echo "<td>" . $row['firstName'] ." ". $row['lastName'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phoneNumber'] . "</td>";
    echo "<td>" . $row['homenumber'] ."<br>". $row['street'] ."<br>". $row['city'] ."<br>". $row['province'] ."<br>". $row['postalcode'] . "</td>";
    echo "<td>" . $row['userType'] . "</td>";

    
    echo "</tr>";
}

echo "</tbody></table>";
echo "</div>";

mysqli_close($con);

?>
