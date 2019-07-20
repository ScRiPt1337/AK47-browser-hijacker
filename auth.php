<?php
session_start();
if(!$_SESSION["username"]){
    header("Location: login.php");
exit(); }
?>