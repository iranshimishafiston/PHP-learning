<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="freind.css">
    <script src="freind.js"></script>
</head>
<style>
  .request .account2{
    width: 200px;
    height: 200px;
    border-radius: 360px;
    background-color: blue;
    margin-top: 200px;
  }
  
  h1{
    color: black;
  }
</style>
<body>
    <center>
<div class="request">
    <br><br>
        <h2>Nova</h2>
        <form action="" method="post">
           <div class="account2" name="account2" style=" width: 200px; height: 200px; border-radius: 360px; background-color: blue;"></div><br><button class="confrim" name="comfirm" onclick="confirm()">comfirm</button>&nbsp;<button class="delete" name="delete" onclick="deleted()">delete</button>
        </form>
    </div>
    </center>

    <?php


$host='localhost';
$user='root';
$password='';
$db='fiston';

$conn=mysqli_connect($host, $user, $password, $db);
if ($conn) {
   // echo "connected";
}else {
   echo "not connected";
}


if (isset($_POST["comfirm"])) {
   // error_reporting(0);
   $sql="SELECT * FROM `freind_request`";
   $added=mysqli_query($conn, $sql);
   if ($added) {
       // echo "added";
   }else {
       echo "not added";
   }

   if(isset($_GET["id"])){
    $id=$_GET["id"];
    $delete=mysqli_query($conn, "DELETE FROM `freind_request` WHERE `id`='$id'");
    header("location:request.php");
    die();
  }

  if(isset($_GET["edit"])){
    $id=$_GET["edit"];
    // $delete=mysqli_query($conn, "DELETE FROM `freind_request` WHERE `id`='$edit'");
    session_start();
    $_SESSION['name']="<script>alert('fiston kendrick i agree your freind request');</script>";
    header("location:request.php");
    die();
  }

   if (mysqli_num_rows($added)>0) {
       $row=mysqli_fetch_assoc($added);
       echo "
       
             <table>
                  <tr>
                     <td>".$row["freind"]."</td>
                     <td>
                     <a href='request.php? id=".$row["edit"]."' class='btn'>comfirm</a>
                     </td>
                     <td>
                     <a href='request.php? id=".$row["id"]."' class='edit'>delete</a>
                     </td>
                  </tr>
             </table>
       
       ";
   }

   if (isset($_POST["delete"])) {
       $mysql="SELECT * FROM `deleted`";
       if ($mysql) {
         echo "inserted";
       }
       else {
        echo "not inserted";
       }

       $sqladded=mysqli_query($conn, $mysql);
       if ($sqladded) {
         echo "sql inserted";
       }
       else {
        echo "sql not inserted";
       }

       if (isset($_POST["delete"])) {
         echo "<script>alert('you delete freind request of fiston kendrick');</script>";
       }
   } 

   if (isset($_POST["comfirm"])) {
      echo "<center><br><br><div style='width: 450px; height: 100px; background-color: green; border-radius: 5px; color: white; text-align: center;'><br><p>you accept freind request of fiston kendrick</p></div></center>";
   }

   if (isset($_POST["delete"])) {
    echo "<center><br><br><div style='width: 450px; height: 100px; background-color: red; border-radius: 5px; color: white; text-align: center;'><br><p>you delete freind request of fiston kendrick</p></div></center>";
   }
}

    session_start();
    echo $_SESSION["name"];
        
    
    ?>
</body>
</html>