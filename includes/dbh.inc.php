<?php
//setting up database

$servername = "us-cdbr-east-02.cleardb.com"; //localhost:8889
$dBUsername = "bafee8afa994bd";	//root
$dBPassword = "4dc6fca9"; //root or ""
$dbName = "heroku_01fdeda2cc1aa3c"; //was trendymarkt

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
