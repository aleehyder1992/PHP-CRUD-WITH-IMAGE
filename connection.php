<?php
// Database configuration
$host = 'localhost';    
$user = 'root';         
$pass = '';             
$dbname = 'crud_3';       
// Create connection
$con = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "OK";
}
?>