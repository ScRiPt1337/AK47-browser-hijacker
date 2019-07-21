<?php
session_start();
       $username = "hell";
       $password = "1337";
      if($_GET["username"] == $username || $_GET["password"] == $password) {
         $_SESSION['username'] = $username;
         header("location: control.php");
      }else {
          header("location: login.php");
      }

?>