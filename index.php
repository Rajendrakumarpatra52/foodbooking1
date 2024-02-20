<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturant booking</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="logo">
        <h1>Food Lover </h1>
        </div>
        <div class="Menu">
            <a href="index.php">Home</a>
            <a href="#" onclick="signin()">Menu</a>
            <a href="#" onclick="signin()">About Us</a>
            <a href="adminlogin.html">Admin</a>
            <a href="login1.html" >Signin</a>
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
    <script>
        function signin(){
            alert("signin to continue");
        }

    </script>

</body>
</html>