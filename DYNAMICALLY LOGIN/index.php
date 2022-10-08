    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./css/style.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>login</title>
    </head>
    <body>

    <?php
    
    include "connect.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $query = "SELECT * FROM `task10_login` WHERE username = '".$username."' AND email = '".$email."' AND password = '".$password."'";

        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result);
    if($row["usertype"] == "admin")
        {
            $username = $_SESSION["username"];
            echo "<div class='alert alert-success' role='alert'> $username  Successfully Login (ADMIN ACCOUNT)</div>";
            header("location: admindashboard.php");
        }
        elseif($row["usertype"] == "user")
        {
            $username = $_SESSION["username"];
            echo "<div class='alert alert-success' role='alert'> $username  Successfully Login (USER ACCOUNT)</div>";
            header("location: userdashboard.php");
        }
        else
        {
            echo "<div class='alert alert-danger' role='alert'> Incorrect Information</div>";
        }
    
    }
    ?>
        
        <form action="#" method="post">

        <div class="container-sm">
        <center> <h1> <b>   LOGIN FORM</b></h1></center>
        <div class="mb-3">
        <label for="exampleInputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="userHelp">
        </div>   
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
 
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <button class="btn btn-primary"> <a href="signup.php" style="color: white">Sign Up</a> </button>
    
    </div>
    
    

    </form>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
    </html>