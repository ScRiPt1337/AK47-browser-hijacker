<?php
include_once 'sql.php';
include_once 'ip.php';



$command = "null";
$ip = getUserIP();
$sql = "UPDATE `user` SET `Code`='$command' WHERE `ip` = '$ip'";
if ($conn->query($sql) === TRUE) {
    echo " New record created successfully";
} 
else {
    echo " Error: " . $sql . "<br>" . $conn->error;
}
