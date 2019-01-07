<?php
    $host="localhost";
    $username="iiitnr_drive";
    $database="iiitnr_drive";   
    $password="createdatabase";
$conn=mysqli_connect($host,$username,$password,$database);
if($conn)
{
    echo "connected";
}
else
{
    echo "not connected";
}
        
?>