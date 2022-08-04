<?php
include("../database/auth_session.php");
require('../database/db.php');

$public =   $_GET['profile'];

                $sql = "SELECT public FROM users WHERE username='$public'";
                $records = mysqli_query($con, $sql);
                $data = mysqli_fetch_array($records);
                if ($data['public'] == "TRUE") {
                    echo "your profile is visible to everyone";
                }
                else {
                    echo "your profile is not visible to everyone";
                }

?>