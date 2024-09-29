<?php

require 'config.php';


$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql="SELECT   FROM    ";

$result=$con->query($sql);

if($result->num_rows > 0) {
    echo "<table border='1'>";
    while($result->fetch_assoc())  
    {
        echo "<tr>";
        echo "<td>".$row[" "]."</td>"."<td>".$row[" "]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "No Results";
}
$con->close();
?>