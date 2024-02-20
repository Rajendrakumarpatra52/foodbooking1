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
    <title>Add an admin</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    <div class="container">
        <div class="slider"></div>
            <div class="btn">
                <button class="signup">Signup</button>
            </div>
        <form action="adminsignin.php" method="post">
            <div class="signup-box">
                    <input type="text" class="name" name="fname"  placeholder="Enter your first name">
                    <input type="text" class="name" name="lname"  placeholder="Enter your last name">
                    <input type="email" class="email" name="email" placeholder="youremail@email.com">
                    <input type="password" class="password" name="password" placeholder="password">
                    <input type="password"class="password" name="c_password"  placeholder="Confirm password">
                    <button class="clkbtn">Signup</button>
            </div>
        </form>
    </div>
</body>
</html>