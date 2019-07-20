<?php

include_once 'sql.php';
include_once 'ip.php';


$ip = getUserIP();
$sql = "DELETE FROM `user` WHERE `IP` = '$ip'";

if ($conn->query($sql) === TRUE) {
    echo "Bot Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location:control.php');
?>
