<?php 
    $host = "localhost";
    $username = "iiitnr_drive";
    $password = "createdatabase";
    $database = "iiitnr_drive";

    $conn = mysqli_connect($host,$username,$password,$database);
    
    if($conn){
        echo "Connected";
    }
    else{
        echo "Not Connected";
    }
?>