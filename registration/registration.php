<?php

include("../loveleen/includes/db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
    
    <?php
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $query = "INSERT INTO user_auth (username,password) VALUE('{$username}','{$password}') ";
        
        $res = mysqli_query($conn,$query);
        if(!$res){
            echo "User not Added";
        }
    }
    
    ?>
    
</body>
</html>