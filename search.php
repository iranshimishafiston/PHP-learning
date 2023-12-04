<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="search" name="search"><button name="searchh">search</button>
    </form>

    <?php   
    error_reporting(0);
    $search=$_POST["search"];
    $connection=mysqli_connect("localhost", "root", "", "work");

    if(isset($_POST["searchh"])){
        $display="SELECT * FROM mugwiza WHERE `first name`='$search'";
        $result=mysqli_query($connection, $display);

        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);

            echo $row["id"]."<br>";
            echo $row["first name"]."<br>";
            echo $row["last name"]."<br>";
            echo $row["email"]."<br>";
            echo $row["password"]."<br>";
        }
    }
    
    ?>
</body>
</html>