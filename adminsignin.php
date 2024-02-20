<?php 
session_start();  
if(isset($_SESSION['email'])){
}else{
    header('location:index.php');
}
?>
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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$c_pass=$_POST['c_password'];
$conn = new mysqli($servername, $username, $password, $dbname);
if($pass==$c_pass){
  $psw=$pass;
  $sql = "INSERT INTO data4 (fname, lname,email, password, c_password)
VALUES ('$fname', '$lname', '$email','$psw','$psw')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
  echo "incorrect";
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>
</body>
</html>