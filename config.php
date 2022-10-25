<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_STUD_ID', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'library_db');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_STUD_ID, DB_PASSWORD, DB_NAME);

/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_STUD_ID, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>