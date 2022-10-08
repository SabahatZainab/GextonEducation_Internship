
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    

<?php

include 'connect.php';


if(isset($_POST['login'])){

    if(!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['password']))
    {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $pasword = $_POST['password'];
        
        $query = "insert into task10_login(username,email,password) values ('$username','$email','$password')";
       $run = mysqli_query($connection,$query) or die(mysqli_error($connection));
       
        if(!$run){
           
            echo "Form Not Submitted";
        }
    }
    else{
        echo "all fields required";
    }
}



######################################################################################
####View

$sql = "SELECT * FROM `task10_login`";
$result = mysqli_query($connection,$sql);

//number of records return
//$num = mysqli_num_rows($result);

//rows return by sql query
if(mysqli_num_rows($result) >= 0){

?>
<div class="container mt-4">
     <table class='table table-bordered table-striped'style=" border-color: #96D4D4;"> 
     <thead class="thead-dark">
    <tr>
    <th scope='col'> Id</th>    
    <th scope='col'> Username</th>
        
        <th scope='col'> Email </th>
        <th scope='col'>  Password</th>
        <th scope='col'> Usertype</th>
        
        
    </tr>
    </thead>
  <?php  while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
        <td scope='row'> <?php echo $row['id']; ?></td>
        <td> <?php echo $row['username']; ?></td>
        <td> <?php echo $row['email']; ?></td>
        <td> <?php echo $row['password']; ?></td>
        <td> <?php echo $row['usertype']; ?></td>
        
        
        </tr>
        <?php

    }
    ?>
    </table>
    </div>
<?php
}
else{
    echo "0 results";
}

?>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>