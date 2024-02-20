<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signin";
$picture=$_POST['photo'];
$name=$_POST['name'];
$mrp=$_POST['mrp'];
$discount=$_POST['discount'];
$price=$_POST['price'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO data2 ()
VALUES ('$picture', '$name', '$mrp','$discount','$price')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>
</body>
</html>