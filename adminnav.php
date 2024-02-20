<?php 
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
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Food Lover</h1>
        </div>
        <div class="Menu">
            <a href="insert.html">Insert items</a>
            <a href="addadmin.php">Create admin</a>
            <a href="Logout.php">logout</a>
        </div>
    </nav>
</body>
</html>