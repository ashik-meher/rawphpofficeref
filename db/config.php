<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rawphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

#$conn->query("SET CHARACTER SET utf8");

#$conn->query("SET SESSION collation_connection ='utf8_general_ci'");


#dinosor wont work 
#mysql_query(‘SET CHARACTER SET utf8’);
#mysql_query(“SET SESSION collation_connection =’utf8_general_ci'”);
