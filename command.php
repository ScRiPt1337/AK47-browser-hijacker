<?php
include_once 'sql.php';
include_once 'ip.php';


$user_ip = getUserIP();

$sql = "SELECT Code FROM user WHERE IP = '$user_ip'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    echo $row["Code"];
}

} else { echo "0 results"; }
$conn->close();

?>
