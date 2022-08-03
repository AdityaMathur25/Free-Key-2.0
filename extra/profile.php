<?php
include("../database/auth_session.php");
require('../database/db.php');
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['number'];
$address = $_GET['address'];
$social = $_GET['Social'];
echo $name , $email , $number , $address , $social;
?>