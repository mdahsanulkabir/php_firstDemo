<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'cmhcc_admin');
define('DB_PASS', 'abcdefgh');
define('DB_NAME', 'cmhcc');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
if($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
    echo "Connection to database failed";
} else {
    echo 'Connected to the server';
}

$conn->close();

?>