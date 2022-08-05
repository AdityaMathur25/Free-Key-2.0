<?php
include("../database/auth_session.php");
require('../database/db.php');
error_reporting(E_ERROR | E_PARSE);

$public =   $_GET['profile'];

                $sql = "SELECT public FROM users WHERE username='$public'";
                $records = mysqli_query($con, $sql);
                $data = mysqli_fetch_array($records);
                if ($data['public'] == "TRUE") {
                    echo "your profile is visible to everyone";
                }
                else {
                    header('Location: success.php?message=User+has+choosed+not+to+display+the+profile+to+public&type=danger&tom=Sorry!!!');
                }

?>