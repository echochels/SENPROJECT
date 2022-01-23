<?php
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$accountnum = $_POST['accountnum'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','123123','chelsea');

$sql = "INSERT INTO user(username,phone,email,accountnum,fullname,password) VALUES('$username','$phone','$email','$accountnum','$fullname','$password')";
if ($conn->query($sql)!==TRUE){
    echo "Error:".$sql."<br>".$conn->error;
    exit();
        }
else{

}
?>
<!doctype html>
    <html lang="en">
		<head>
            <title>Sign up form</title>
            <link rel="stylesheet" href="style3.css">
        </head>
        <body>
            <form class="box" action="index.php" method="POST">
            <div class="sign-up-form">
                <img src="user.png">
                <h1>Sign Up Success</h1>
                <h2>Your Sign Up was Successful</h2>
                    <button type="submit" class="signup-btn">Sign In</button>
                    <hr>
            </div>
        </body>
    <?php
    
    ?>
</html>