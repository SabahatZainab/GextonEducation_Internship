<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "task11_chatApps";

$connection = mysqli_connect($server,$username,$password,$dbname);

if(!$connection){
    die("Sorry we failed to connect ". mysqli_connect_error());
}

?>