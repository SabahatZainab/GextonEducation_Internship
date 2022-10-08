<?php 
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>CHAT APPLICATION - LOGIN</header>
            <form action="#">
                <div class="error-text"></div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password">
                       
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet sign up? <a href="index.php">Signup Now</a> </div>
        </section>
    </div>
    <script src="./javascript/login.js"></script>
</body>
</html>