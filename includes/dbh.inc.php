<?php

$serverName = "localhost";
$dBUsername = "kieran.wiertz";
$dBPassword = "V3M98FU6";
$dBName = "kieranwiertz_loginsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}