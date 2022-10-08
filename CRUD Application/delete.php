<?php

include "connect.php";

 $id = $_GET['id'];
 $sql = "DELETE FROM form WHERE id = {$id}";
 $result =  mysqli_query($connection,$sql) or die("Query Unsuccessful");

 header("Location: http://localhost/Gexton Internship/Task-2 crud/insert.php");
 mysqli_close($connection);
 



?>