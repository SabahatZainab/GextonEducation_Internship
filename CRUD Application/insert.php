
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


if(isset($_POST['submit'])){

    if(!empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['email']) and !empty($_POST['course']) and !empty($_POST['phone']) and !empty($_POST['gender']))
    {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        $query = "insert into form(firstname,lastname,email,course,phone,gender) values ('$firstname','$lastname','$email','$course','$phone','$gender')";
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

$sql = "SELECT * FROM `form`";
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
        <th scope='col'> First Name</th>
        <th scope='col'> Last Name</th>
        <th scope='col'> Email </th>
        <th scope='col'>  Course</th>
        <th scope='col'> Phone Number</th>
        <th scope='col'> Gender</th>
        <th scope='col'> Action</th>
    </tr>
    </thead>
  <?php  while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
        <td scope='row'> <?php echo $row['firstname']; ?></td>
        <td> <?php echo $row['lastname']; ?></td>
        <td> <?php echo $row['email']; ?></td>
        <td> <?php echo $row['course']; ?></td>
        <td> <?php echo $row['phone']; ?></td>
        <td> <?php echo $row['gender']; ?></td>
        <td>
            
        <a href='edit.php?id=<?php echo $row['id']; ?> '><button type='submit' name='submit' class='btn btn-primary'>Update</button></a>
        <a href='delete.php?id=<?php echo $row['id']; ?>'><button type='submit' name='delete' class='btn btn-primary'>Delete</button></a>
    
        
        
        </td>
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