<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        firstname:<br>
        <input type="text" name="firstname"><br><br>
        lastname:<br>
        <input type="text" name="lastname"><br><br>
        email:<br>
        <input type="email" name="email"><br><br>
        password:<br>
        <input type="password" name="password"><br><br>
        <button name="submit">login</button>
    </form>

    <?php
    
    $host="localhost";
    $user="root";
    $password="";
    $db="work";

    $conn=mysqli_connect($host, $user, $password, $db);
    if(isset($_POST["submit"])){
        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $email=$_POST["email"];
        $pass=$_POST["password"];

        $sql="INSERT INTO `mugwiza` (`first name`, `last name`, email, password) VALUES ('$fname', '$lname', '$email', '$pass')";
        $byinjiye=mysqli_query($conn, $sql);

        if($byinjiye){
            echo "byabaye";
        }

        else{
            echo "byanze";
        }
    }
    
    ?>
</body>
</html>