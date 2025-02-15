<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
    die("failed to connect! ");
}





?>