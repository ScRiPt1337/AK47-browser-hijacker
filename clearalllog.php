<?php
include_once 'sql.php';
include 'auth.php';
$sql = "TRUNCATE TABLE data";
if ($conn->query($sql) === TRUE) {
    echo " New record created successfully";
} 
else {
    echo " Error: " . $sql . "<br>" . $conn->error;
}
