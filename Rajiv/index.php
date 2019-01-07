<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name = "name">
        <input type="submit" value="print" name="submit">
    </form>
    
    <?php
        if(isset($_GET['submit'])){
            $name = $_GET['name'];
            echo $name;
        }
    ?>
</body>
</html>
