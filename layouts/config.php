<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// Create database connection
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'iveondco_bot_store');
define('DB_PASSWORD', '[S[oCUHnYlc~');
define('DB_NAME', 'iveondco_bot_store');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$gmailid = ''; // YOUR gmail email
$gmailpassword = ''; // YOUR gmail password
$gmailusername = ''; // YOUR gmail User name

?>