<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" id=""><br>
        <input type="text" name="op" id=""><br>
        <input type="number" name="num2" id=""><br>
        <input type="submit" name="submit">
    </form>

    <?php 
          $num1=$_POST["num1"];
          $num2=$_POST["num2"];
          $op=$_POST["op"];

          
    ?>
</body>
</html>