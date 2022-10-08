<?php
   require_once 'connect.php';
    if(isset($_POST['email'])){
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $query1 = "SELECT * FROM task10_login WHERE email= '".$email."'";
        $result1 = mysqli_query($connection,$query1);
        echo mysqli_num_rows($result1);
    }
?>