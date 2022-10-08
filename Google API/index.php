<?php
    require_once('setup.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <title>Google API</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
    
    <div class="container-sm ">
    <form action="#" method="get">
      <div class="imgcontainer">
    <img src="./images/gexton logo.png" width="100px" alt="Avatar" class="avatar" >
  </div>

  <div class="container-sm ">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    
  </div>

<!----------------->
<center> 
<div class="btn-group border shadow-sm mt-2">
        <button class="btn bg-white">
            <img src="./images/logo.png" width="35">
        </button>
        <button class="btn bg-light">
            <a href="<?php echo $google->createAuthUrl();?>">LOGIN WITH GOOGLE</a>
        </button>
    </div>
    </center>
   
   
   </div>

</form>
    
    

  </body>
</html>