<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" id="user"><br><br>
        <input type="password" name="pass" id="pass"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php 
    
         $_SESSION["username"]=$_POST["user"];
         $_SESSION["pass"]=$_POST["pass"];

        
         
    ?>
</body>
</html>