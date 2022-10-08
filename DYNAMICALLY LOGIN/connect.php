<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "gexton_internship";

$connection = mysqli_connect($server,$username,$password,$dbname);

if(!$connection){
    die("Sorry we failed to connect ". mysqli_connect_error());
}
 
    


    

if(isset($_POST['signup'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $query2 = "SELECT * FROM `task10_login` WHERE email = '".$email."'";
        $result2  = mysqli_query($connection,$query2)or die(mysqli_error($connection));


        if(mysqli_num_rows($result2)>0){      
            echo "<div class='alert alert-danger' role='alert'> Email Already Exit!</div>";
       }else{

        $query = "INSERT INTO `task10_login`( `username`, `email`, `password`, `usertype`) 
        VALUES ('$username','$email','$password','$usertype')";
       $run = mysqli_query($connection,$query) or die(mysqli_error($connection));
       
        if($run){
            echo "Form Submitted Successfully";
        }
        else{
            echo "Form Not Submitted";
        }
    }
    }
    ?>
  

   




