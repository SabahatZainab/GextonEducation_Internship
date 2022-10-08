<?php
    include "connect.php";
    error_reporting(0);
    require_once('setup.php');
    if(isset($_GET['code'])){
        //token
        $token = $google->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['token'] = $token;
        if(!isset($token["error"])){
            $google->setAccessToken($token['access_token']);
            $service = new Google_Service_Oauth2($google);

            $data = $service->userinfo->get();

         $name=   $_SESSION['name'] = $data['name'];
         $email= $_SESSION['email'] = $data['email'];
        }
       $query ="INSERT INTO `task7`(`name`, `email`) VALUES ('$name','$email')";
       $sql = mysqli_query($connection,$query) or die(mysqli_error($connection));

        

         if(!$sql){
           
          echo "Form Not Submitted";
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <div class="container">
        <div class="card" style="width:400px;margin:80px auto;">
       

        <div class="card-body">

            <h3> <b> WELCOME </b></h3> <hr>
            <h4>User Information:</h4>
            <h5 class="card-title"><?php echo $_SESSION['name']?></h5>
            <span><?php echo $_SESSION['email']?></span><br><br>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
        </div>
    </div>
  </body>
</html>