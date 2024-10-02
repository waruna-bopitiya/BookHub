
<?php

require 'config.php';


$sql="SELECT userID,firstName,lastName,email,pswd FROM user ";

$result=$con->query($sql);

if($result->num_rows > 0) {
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())  
    {
        echo "<tr>";
        echo "<td>".$row["userID"]."</td>"."<td>".$row["firstName"]."</td>"."<td>".$row["lastName"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["pswd"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "No Results";
}
$con->close();
?>

