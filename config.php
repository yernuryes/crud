<?php
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'uadmin');
define('DB_PASSWORD', '123');
define('DB_NAME', 'db0');

$link = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
