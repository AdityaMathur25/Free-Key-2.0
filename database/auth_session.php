<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: /Free-Key-2.0/login.php");
        exit();
    }
   // $_SESSION["username"] ?? " " ;
?>
