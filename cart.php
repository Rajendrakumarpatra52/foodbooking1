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
    <title>Cart</title>
    <?php include("nav.php"); ?>
    <style>
        table{
            height:300px;
            width: 400px;
        }
        #button{
            height:30px;
            width: 400px;
            background-color: darkorange;
        }
    </style>
</head>
<body>
    <center>
        <h1><b><u>Your Cart</u></b></h1>
    
    <div>
        <table border>
            <tr>
                <td>Item name</td>
                <td><?php echo $_GET['item_name']; ?></td>
            </tr>
            <tr>
            <td>MRP</td>
            <td><?php echo $_GET['price']; ?></td>
            </tr>
            <tr>
                <td>Discount</td>
                <td><?php echo $_GET['discount']; ?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><b><?php  echo $_GET['net_price']; ?></b></td>
            </tr>
            <tr>
                <td colspan="2"><a href="address.html"><input type="submit" value="Proceed" id="button"></a></td>
            </tr>
        </table>
        
    </div>
    </center>
</body>
</html>