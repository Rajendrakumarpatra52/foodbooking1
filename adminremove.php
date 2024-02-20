<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php
$item_name=$_GET['item_name'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signin";
$item_name=$_GET['item_name'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE FROM data2 where item_name='$item_name'";
if ($conn->query($sql) === TRUE) {
   ?>
   <script>
    alert('Record removed successfully');
    </script>
   <?php
} else {
  echo "Error: ". $conn->error;
}
$conn->close();
?>
</body>
</html>