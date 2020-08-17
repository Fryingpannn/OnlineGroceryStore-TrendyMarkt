<?php
//setting up database

//remote connection (jawsDB): DEPLOY WITH THIS
// $servername = getenv("MYSQL_HOST");
// $dBUsername = getenv("MYSQL_USER");	
// $dBPassword = getenv("MYSQL_PASS"); 
// $dbName = getenv("MYSQL_DB");

$servername = "z37udk8g6jiaqcbx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername = "bgg6h8p8t8tr9d8x";	
$dBPassword = "grf6g3l4bbmayisf"; 
$dbName = "rykppv8n7h82a40v";

//local connection: DONT DEPLOY WITH THIS
$servername = "localhost:8889";
$dBUsername = "root";
$dBPassword = "root"; // or ""
$dbName = "trendymarkt";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
