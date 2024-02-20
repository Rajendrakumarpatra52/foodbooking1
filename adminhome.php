<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<?php 
session_start();  
if(isset($_SESSION['email'])){
}else{
    header('location:index.php');
}
include("adminmenu.php");
?>
</body>
</html>