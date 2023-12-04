<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="username"><br><br>
        <input type="password" name="password" id="password"><br><br>
        <button name="submit">submit</button>
    </form>

    <?php 
    
         $host="localhost";
         $user="root";
         $password="";
         $db="fiston";

         $fiston=mysqli_connect($host, $user, $password, $db);
         if(isset($_POST["submit"])){
            $username=$_POST["username"];
            $pass=$_POST["password"];

            $sql="INSERT INTO try(username,password) VALUES ('$username', '$pass')";
            $added=mysqli_query($fiston, $sql);

            if ($added) {
                echo "twikarage wllh";
            }
         }
    ?>
</body>
</html>