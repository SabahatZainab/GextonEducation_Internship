<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Application</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    

    <!-- nav bar-->
    <div class="container mt-4">
    <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./images/gexton logo.png" alt="" width="70%" height="70%">
          </a>
        </div>
      </nav>
      
 
      <!-- nav bar end-->

    <!-- Form-->
    <form action= "insert.php" method="POST">
       
    <div class="mb-3">
            <label for="exampleInputFirstname" class="form-label ">First Name:</label>
            <input type="text" class="form-control firstname" name="firstname" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputLastname" class="form-label">Last Name:</label>
            <input type="text" class="form-control lastname" name="lastname" required>
          </div>
    
        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address:</label>
          <input type="email" class="form-control email" name="email" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        
       
       <!--select tag-->
       
        <label for="exampleInputCourse" class="form-label">Course:</label>
    <select class="form-select form-select-lg mb-3 course" aria-label=".form-select-sm example" name="course">
        <option selected value="Web">Web Development</option>
        <option value="Android">Android Development</option>
        <option value="Graphics">Graphics</option>
        <option value="Java">Java</option>
      </select>
      
      <!--end select tag-->

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label" id="phone">Phone Number:</label>
        <input type="number" class="form-control phone" name="phone" required>
      </div>

      <!-- Radios-->
      <label for="exampleInputGender" class="form-label">Gender:</label>
      <div class="form-check">
        <input class="form-check-input gender" type="radio"  name="gender" value="male">
        <label class="form-check-label" for="flexRadioDefault1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input gender" type="radio" name="gender" checked value="female">
        <label class="form-check-label" for="flexRadioDefault2">
          Female
        </label>
      </div>
      <!-- end radios-->
      <br>
      <br>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
               
    </form>
    
      
    <a href="insert.php"><button type="submit" name="submit" class="btn btn-primary">View</button></a>
    
    



      <!--form end-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>