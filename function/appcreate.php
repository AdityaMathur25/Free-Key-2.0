<?php
include("../database/auth_session.php");
require('../database/db.php');
$app = $_POST['name'];
$ver = $_POST['ver'];
$cap = $_SESSION['username'];
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (empty($app && $ver)) {
    echo "Appname can not be empty";
}
else {
    $check = "SELECT * FROM dataa WHERE app = '".$app."'";
    $cat = mysqli_query($con, $check); // fetch data from database
    $man = mysqli_num_rows( $cat );
    echo $man;
if ($man == 1) {
    echo "table exists";
}
else{
    echo "table not found";
    $dad = "dataa";
    $sql = "CREATE TABLE $app (`id` INT(10) NOT NULL AUTO_INCREMENT , `keyy` VARCHAR(40) NOT NULL , `create_at` DATETIME NOT NULL , `hwid` VARCHAR(40) NOT NULL, `vers` VARCHAR(5) NOT NULL DEFAULT '1'  , PRIMARY KEY (`id`))";
    if (mysqli_query($con, $sql)) {
        $fp = fopen("../exclude/$app.php", "wb");
        echo copy("../assets/temp.php", "../exclude/$app.php");
        $appp = "admin";
        $popo = "dataa";
        $popi =  "INSERT INTO `dataa` (`user`, `app` , `veri`) VALUES ('" . $cap . "', '" . $app . "' , '" . $ver . "' )";
        if (mysqli_query($con, $popi)) {
        } else {
            $ret =  "Error Creating Application : " . mysqli_error($con);
        }
        $ret = "Your Application " . $app . " created successfully";
    } 

    else {
        $ret =  "Error Creating Application : " . mysqli_error($con);
    }
}

    

mysqli_close($con);
    
}
