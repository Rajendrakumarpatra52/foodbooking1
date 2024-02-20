<?php
session_start();
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
$email=$_POST['email'];
$pass=$_POST['pass'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql= "SELECT password FROM data4 where email='$email'";
$result = $conn->query($sql);
$_SESSION['email']=$email;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   $pws=$row['password'];
  }
  }
if($pass==$pws){
    header('location:adminhome.php');
}
else{
    echo "enter correct details";
}
$conn->close();
?>
</body>
</html>