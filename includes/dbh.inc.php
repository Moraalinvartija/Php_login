<?php
$serverName = "localhost";
$dBUusername = "root";
$dBPassword = "";
$dBName = "phplogin";

$conn = mysqli_connect($serverName, $dBUusername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}