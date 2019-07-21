<?php
include_once 'sql.php';


echo "<table>";
$sql = "SELECT ID, IP, Country, OS, Browser, BrowserV FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" .  $row["IP"] . "</td><td>" . $row["Country"] . "</td><td>" . $row["OS"] . "</td><td>" . $row["Browser"] . "</td><td>" . $row["BrowserV"] . "</td></tr>";

    }
    echo "</table>";
}
else { echo "0 results"; }
$conn->close();
?>