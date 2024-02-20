<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturant booking</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="login.php" method="post">
    <nav>
        <div class="logo">
            <h1>Food Lover</h1>
        </div>
        <div class="Menu">
            <a href="home.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About Us</a>
            <a href="#" > <?php session_start();
            if(isset($_SESSION['email'])){
                echo "welcome " .$_SESSION['email'];
            }else{
                header('location:index.php');
            }
            ?></a>
        </div>
    </nav>
    <div class="M3">
    <span>
        <p>Are you hungry ?</p>
    </span>
    <span>
        <h2>Don't Wait </h2>
    </span>
    <span>
        <p>Let's start to order food now</p>
        <p>Checkout Menu </p>
    </span>
    </div>
    <div class="footer">
        <div class="food">
            <div id="food1"></div>
            <div id="food2"></div>
            <div id="food3"></div>
            <div id="food4"></div>
        </div>
    </div>
</form>
<?php include("footer.php"); ?>
</body>
</html>