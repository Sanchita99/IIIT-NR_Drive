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
        <input type="submit" name="submit" value="Login">
    </form>
    
    <?php
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $query = "SELECT * FROM user_auth WHERE username = '$username' AND password='$password' ";
        
        $res = mysqli_query($conn,$query);
        
        $count = mysqli_num_rows($res);
        if($count==0){
            echo "Incrorrect Credentials";
        }
        else{
            echo "Logged In";
        }
    }
    
    ?>
    
</body>
</html>