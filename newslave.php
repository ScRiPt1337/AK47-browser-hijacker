<?php

include_once 'sql.php';
include_once 'ip.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function ip_details($IPaddress) {
    $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$IPaddress;
    $addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
    $city = $addrDetailsArr['geoplugin_city']; 
    $country = $addrDetailsArr['geoplugin_countryName'];
    return $country;
    }

function clean($string) {
   return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
}

$user_ip = getUserIP();
$Country = ip_details($user_ip);
if ($_GET["OS"] || $_GET["Browser"] || $_GET["BrowserV"]){
    $OS = clean(mysqli_real_escape_string($conn,($_GET["OS"])));
    $Browser = clean(mysqli_real_escape_string($conn,($_GET ["Browser"])));
    $BrowserV = clean(mysqli_real_escape_string($conn,($_GET["BrowserV"])));
    $data = ":( No data";
    //SELECT * FROM `user` WHERE `IP` = '2405:204:b106:6117:2d53:c205:c35d:7c4a'
    $check = "SELECT * FROM `user` WHERE `IP` = '$user_ip'";
    $result = $conn->query($check);
    if ($result->num_rows > 0) {
        echo " Already excixt";
    }
    else
    {
        
        $sql = "INSERT INTO user(IP, Country, OS, Browser, BrowserV, Code, DATA) VALUES ('$user_ip','$Country','$OS','$Browser','$BrowserV','null','$data')";
        if ($conn->query($sql) === TRUE) {
            
            echo " New record created successfully";
        } 
        else {
            echo " Error: " . $sql . "<br>" . $conn->error;
        }
    }

}


$conn->close();
     
?>
