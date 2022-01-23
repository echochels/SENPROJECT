<!doctype html>
    <html lang="en">
		<head>
            <title>Sign up form</title>
            <link rel="stylesheet" href="style3.css">
        </head>
        <body>
            <form class="box" action="sup.php" method="POST">
            <div class="sign-up-form">
                <img src="user.png">
                <h1>Sign Up Now</h1>
                <form>
                    <input type="username" class="input-box" placeholder="Your Username" name="username" /required>
                    <input type="phone" class="input-box" placeholder="Your Phone Number" name="phone" /required> 
                    <input type="email" class="input-box" placeholder="Your Email" name="email" /required>
                    <input type="int" class="input-box" placeholder="Your Account Number" name="accountnum" /required>
                    <input type="name" class="input-box" placeholder="Your Fullname" name="fullname" /required>
                    <input type="password" class="input-box" placeholder="Your Password" name="password" /required>
                    <p><span><input type="checkbox"></span>I agree to the terms of services</p>
                    <button type="submit" class="signup-btn">Sign Up</button>
                    <hr>
                    <p class="or">OR</p>
                    <P>Do you have an account?<a href="index.php">Login</a></P>
                </form>
            </div>
        </body>
    <?php

    ?>
</html>