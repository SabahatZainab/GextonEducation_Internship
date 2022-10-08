<?php

$hostname     = "localhost";
$username     = "root";
$password     = ""; 
$databasename = "task16"; 

// Create connection 
$connection = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($connection->connect_error) { 
die("Unable to Connect database: " . $connection->connect_error);
 }
?>