<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "csjd_database";
// Create connection
$db_connect = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$db_connect) {
  die("Connection failed: " . mysqli_connect_error());
}
