<?php


$host = "localhost";
$user = "root";
$pass = "";
$con = mysqli_connect($host, $user, $pass);
if (!$con) {
    die('Could not conect: ' . mysqli_error($con));
}
$db = "hackathon";
$connect_db = mysqli_select_db($con, $db);
