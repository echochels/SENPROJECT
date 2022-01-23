<?php
    $host = "127.1.2.3";
    $user="root";
    $password="123123";
    $db_name="chelsea";

    $con=mysqli_connect($host,$user,$password,$db_name);
    if(mysqli_connect_error()){
        die("Failed to connect with MySQL:".mysqli_connect_error());    
    }

?>