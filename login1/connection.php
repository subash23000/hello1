<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)->connect_error) {
    die("failed to connect! ");
}





?>