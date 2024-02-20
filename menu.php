<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("nav.php"); ?>
    <title>Menus</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div id="item">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signin";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql= "SELECT food_img, item_name, price, discount, net_price FROM data2";
if(isset($_SESSION['email'])){
}else{
  header('location:index.php');
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {?>
    <div class="box">
    <div id="img">
    <img src="images/<?php echo $row['food_img'];?>">
    </div>
    <center>
    <div id="data">
    <b><?php echo $row['item_name'];?></b><br>
    <?php echo "MRP: "?><s> <?php echo $row['price'];?></s><br>
    <?php echo "Discount: " .$row['discount'];?>%<br>
    <?php echo "Price: " .$row['net_price'];?><br>
    </div>
    <div id="button">
    <a href="cart.php?images/<?php echo $row['food_img'];?>& item_name=<?php echo $row['item_name'];?>& price=<?php echo $row['price'];?>& discount=<?php echo $row['discount'];?>& net_price=<?php echo $row['net_price'];?>">Buy Now</a>
    </div>
    </center>
    </div>
 <?php }
  }
else{
    echo "enter correct details";
}
$conn->close();
?>
</div>
<?php include("footer.php"); ?>
</body>
</html>