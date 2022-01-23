
<?php
include ('connection.php');
session_start();
session_destroy();
session_start();
$username = $_POST['username'];
$password= $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);

    $sql = "select *from user where username = '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
        if($count == 1){ 
           	$_SESSION['login_user']=$username;
            echo $_SESSION['login_user']." is logged in";
            header('location:bankingapp.php');
            }  
        else{  
            echo "Login Error";
            session_start();
            header('location:index.php');        
        }

?>
