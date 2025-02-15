<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "9805245839";
$dbname = "login_sample_db";

if($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect!");
}