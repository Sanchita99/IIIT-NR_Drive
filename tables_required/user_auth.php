<?php 
    include('../loveleen/includes/db.php');
    
    $query = "CREATE TABLE user_auth (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL
            ) ";

    $res = $conn->query($query);
    
    if($res){
        echo "<br>Table Created";
    } 
else{
 echo "<br>Not Created".mysqli_error($conn);
}
    
    

?>