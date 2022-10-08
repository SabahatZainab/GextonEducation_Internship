

<?php 
include "connect.php";
########################INSERT ##############################

if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM `form` WHERE id = '$id'";
  $result = mysqli_query($connection,$sql) or die("Query Unsuccessful");
  if(mysqli_num_rows($result) > 0){
  while( $row = mysqli_fetch_assoc($result))
{
   ?>

<div class="container mt-3">
<form  method="POST">

       
<div class="mb-3">
        <label for="exampleInputFirstname" class="form-label ">First Name:</label>
        <input type="text" class="form-control firstname" name="firstname" value="<?php echo $row['firstname']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputLastname" class="form-label">Last Name:</label>
        <input type="text" class="form-control lastname" name="lastname" value="<?php echo $row['lastname']; ?>" required>
      </div>

    <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Email address:</label>
      <input type="email" class="form-control email" name="email" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
   
   <!--select tag-->
   
    <label for="exampleInputCourse" class="form-label">Course:</label>
<select class="form-select form-select-lg mb-3 course" aria-label="form-select-sm example" name="course" value="<?php echo $row['course']; ?>">
    <option selected value="Web">Web Development</option>
    <option value="Android">Android Development</option>
    <option value="Graphics">Graphics</option>
    <option value="Java">Java</option>
  </select>
  
  <!--end select tag-->

  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label" id="phone">Phone Number:</label>
    <input type="number" class="form-control phone" name="phone" value="<?php echo $row['phone']; ?>" required>
  </div>

  <!-- Radios-->
  <label for="exampleInputGender" class="form-label">Gender:</label>
  <div class="form-check">
    <input class="form-check-input gender" type="radio"  name="gender" value="<?php echo $row['gender']; ?>">
    <label class="form-check-label" for="flexRadioDefault1">
      Male
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input gender" type="radio" name="gender" checked value="<?php echo $row['gender']; ?>">
    <label class="form-check-label" for="flexRadioDefault2">
      Female
    </label>
  </div>
  <!-- end radios-->
  <br>
  <br>

   
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    
  
    
           
</form>
</div>
<?php
}
}

##############



  ###################

      
##################################################################

?>

    <?php

}
if(isset($_REQUEST['update'])) { 
       $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        $update = "UPDATE form set 
        
        firstname = '$firstname',
        lastname = '$lastname',
        email = '$email',
        phone = '$phone',
        course= '$course',
        gender = '$gender'
        
        where id = $id";
        $output = mysqli_query($connection,$update);
        if($output){
          header("location:insert.php");
        }else{
          echo "$output";
        }
}


?>