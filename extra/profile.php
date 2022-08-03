<?php
include("../database/auth_session.php");
require('../database/db.php');
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['number'];
$address = $_GET['address'];
$social = $_GET['Social'];
$user = $_SESSION['username'];
//echo $name , $email , $number , $address , $social;
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
 // $int =  "INSERT INTO `users` (`name`, `mobile` , `address`, `social` , `email`) VALUES ('".$name."', '".$mobile."' , '".$address."' , '".$social."' , '".$email.")";
//  $int = "UPDATE `users` SET name ='".$name."', mobile ='".$mobile."' , address ='".$address." , social ='".$social."' , email ='".$email."'WHERE username='".$user."';";
//  if (mysqli_query($con, $int)) {
//     echo "successfully" ;
// } else {
//  echo "failed" ;
// } 
    $query = "UPDATE users
SET name='$name',
 address='$address',
 mobile='$number',
 social = '$social',
 email='$email'
 WHERE username='$user'";
 if (mysqli_query($con, $query)) {
    echo "successfully" ;
} else {
 echo "failed" ;
}

 
 
?>