<?php
//setting up database

//remote connection env variables (jawsDB): DEPLOY WITH THIS
$servername = getenv("MYSQL_HOST");
$dBUsername = getenv("MYSQL_USER");	
$dBPassword = getenv("MYSQL_PASS"); 
$dbName = getenv("MYSQL_DB");

//local connection: DONT DEPLOY WITH THIS
// $servername = "localhost:8889";
// $dBUsername = "root";
// $dBPassword = "root"; // or ""
// $dbName = "trendymarkt";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
