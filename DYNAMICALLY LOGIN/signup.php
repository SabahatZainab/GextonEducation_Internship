<!doctype html>
<html lang="en">
  <head>
    <?php
    include "connect.php";
    ?>
    <script  src="https://code.jquery.com/jquery-2.1.0.min.js">   </script>
    <script>
          $(document).ready(function(){
      $('#email').blur(function(){

        var email = $(this).val();
        console.log(email);
        $.ajax({
            url: 'check.php',
            method: 'POST',
            data: {email:email},
            success: function(response)
            {
              alert(response);
                if(response != '0')
                {
                    $('#avail').html('<span class="text-danger">Email already Exit.</span>');
                    
                }
                
            }
          });
        });
      });
   

     
       
      </script>
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

    
  </head>
  <body>
  <form action="connect.php" method="post">

<div class="container-sm">
<center> <h1> <b>   SIGNUP FORM</b></h1></center>
<div class="mb-3">
<label for="exampleInputUsername" class="form-label">Username</label>
<input type="text" class="form-control" id="username" name="username" aria-describedby="userHelp">
</div>   
<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
<span id="avail"></span>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" id="password" name="password">
</div>
<select class="form-select" aria-label="Default select example" name="usertype">
  
  <option  value="admin">Admin</option>
  <option selected value="user">User</option>
  
</select>


<button type="submit" class="btn btn-primary" name="signup" id="signup">SIGN UP</button>
<button class="btn btn-primary"> <a href="index.php" style="color: white">Login</a> </button>
<button class="btn btn-primary"> <a href="index.php" style="color: white">Back</a> </button>
</div>


</form>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

// $(document).ready(function(){
        
//   function checkemailAvailability() {
// $("#loaderIcon").show();
// jQuery.ajax({
// url: "check.php",
// data:'email='+$("#email").val(),
// type: "POST",
// success:function(data){
// $("#email-availability-status").html(data);
// $("#loaderIcon").hide();
// },
// error:function (){}
// });
// }
//       });
    
    

   



</script>

  </body>
</html>