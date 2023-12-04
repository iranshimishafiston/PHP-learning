<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name"><br><br>
        <input type="password" name="pass" id="pass"><br><br>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    
        $host="localhost";
        $user="root";
        $password="";
        $db="software";

        $conn=mysqli_connect($host, $user, $password, $db);
        if(isset($_POST["submit"])){
            $username=$_POST["name"];
            $pass=$_POST["pass"];
            $email=$_POST["email"];

            $sql="  INSERT INTO my_guy(username,password,email) VALUES ('$username', '$pass', '$email')";
            $byinjiye=mysqli_query($conn, $sql);

            if ($byinjiye) {
                echo "twikarage";
            }else {
                echo "byanze";
            }

        }
    ?>
</body>
</html>