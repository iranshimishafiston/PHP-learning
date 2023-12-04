<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>
    <h2>Delete Record</h2>

    <form action="php.php" method="post">
        <label for="record_id">Enter Record ID to Delete:</label>
        <input type="text" id="record_id" name="record_id" required>
        <button type="submit">Delete</button>
    </form>
</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kendrick";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    // echo "connected";
}
else {
    echo "not connected";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $record_id = $_POST['record_id'];

    $sql = "DELETE FROM comfrim WHERE id = $record_id";

    $added=mysqli_query($conn, $sql);

    if ($added) {
        echo "record deleted";
    }
    else {
        echo "record not deleted";
    }
}

$conn->close();
?>
