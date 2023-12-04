<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="freind.css">
    <script src="fre.js"></script>
</head>
<body>
    <center>
        <br><br><br><br><br><br><br>
    <div class="freind">
        <h1>Fiston kendrick</h1>
        <form method="post">
            <div class="account" name="account"></div><br><button class="reques" name="request">request</button>&nbsp;<button class="see" name="see">see profi</button>
        </form>
    </div>
    </center>


    <?php   


         $host='localhost';
         $user='root';
         $password='';
         $db='kendrick';

         $conn=mysqli_connect($host, $user, $password, $db);
         if ($conn) {
            // echo "connected";
         }else {
            echo "not connected";
         }

        if (isset($_POST["request"])) {
            $sql="SELECT * FROM `comfrim`";
            $added=mysqli_query($conn, $sql);
            if ($added) {
                // echo "added";
            }else {
                echo "not added";
            }

            if (mysqli_num_rows($added)>0) {
                $row=mysqli_fetch_assoc($added);
                echo "
                
                    <center>
                      <table style='margin-top: -450px;'>
                           <tr>
                              <td style='width: 300px; height: 100px; border-radius: 5px; background-color: white; color: white; text-align: center;'>".$row["comfrim"]."</td>
                           </tr>
                      </table>
                    </center>
                
                ";
            }
        }


          error_reporting(0);
          session_start();
          $request=$_POST["request"];
          $account=$_POST["account"];
          if (isset($_POST["request"])) {
             echo "<script>alert('you sent freind request to Nova');</script>";
             $sess=$_SESSION['name']="<script>alert('fiston kendrick sent freind request');</script>";
          }else {
            // echo "<script>alert('request not sent because this account is not secure');</script>";
          }

          if (isset($_POST["see"])) {
              echo "<script>alert('do you want to show this profile');</script>";
              $accountt=$_POST["account"];

              
          }
    
    ?>
</body>
</html>