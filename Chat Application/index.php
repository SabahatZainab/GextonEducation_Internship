<?php 
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT APPLICATION - SIGNUP</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="firstname">First Name</label>
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="field input">
                        <label for="lastname">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password" required>
                       
                    </div>
                    <div class="field image">
                        <label for="image">Select Image</label>
                        <input type="file" name="image" required >
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already Have A Account? <a href="login.php">Login Now</a> </div>
        </section>
    </div>
    <script src="./javascript/signup.js"></script>
</body>
</html>