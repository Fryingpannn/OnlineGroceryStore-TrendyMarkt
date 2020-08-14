<?php
//setting up database

$servername = "localhost:8889";
$dBUsername = "root";
$dBPassword = "root"; //or ""
$dbName = "trendymarkt";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}