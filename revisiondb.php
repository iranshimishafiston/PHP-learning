<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>deleted record</h1>
        <input type="text" name="insert" id=""><button name='submit'>delete</button>
    </form>

    <?php 
    
      $host='localhost';
      $user='root';
      $password='';
      $db='kendrick';
      
      $conn=mysqli_connect($host, $user, $password, $db);

      if ($conn) {
         // echo "connected";
      }
      else {
          echo "not connected";
      }

      if (isset($_POST["submit"])) {
         $insert=$_POST["insert"];

         $sql="DELETE FROM `comfrim` WHERE id='$insert'";

         $added=mysqli_query($conn, $sql);
         if ($added) {
            echo "record deleted";
         }
         else {
            echo "record not deleted";
         }
      }

    ?>
</body>
</html>