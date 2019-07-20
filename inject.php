<?php
include_once 'sql.php';
include 'auth.php';

function rmspc($string) {
   return preg_replace('/\s/', '', $string);
}

if($_GET["command"] || $_GET["ip"]){
    $command = mysqli_real_escape_string($conn,rmspc($_GET["command"]));
    $ip = mysqli_real_escape_string($conn,rmspc($_GET["ip"]));
    $sql = "UPDATE `user` SET `Code`='$command' WHERE `ip` = '$ip'";
    if ($conn->query($sql) === TRUE) {
        echo " New record created successfully";
    } 
    else {
        echo " Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>