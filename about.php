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
    <?php include("nav.php"); ?>
    <title>About our Restaurant</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <center>
  <div id="about">
    <pre>Our mission is to elevate the quality of life for the urban consumer with unparalleled convenience. 
Convenience is what makes us tick. It's what makes us get out of bed and say, "Let's do this."</pre>
</div>
<h1>Something more about ourself</h1>
<div id="about1">
  <div class="content">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, sint eum error, sed quo dolorem eaque, saepe ab at aliquid totam fugiat ad odit nulla rerum tenetur unde aspernatur ipsum!Lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam architecto expedita sequi et laboriosam aspernatur. Quibusdam ducimus sunt fugiat esse aperiam nemo tempora quia exercitationem saepe. Earum velit natus ut?
    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam illo ex suscipit debitis ducimus praesentium harum voluptatibus laudantium perspiciatis rerum dicta culpa vitae ab eligendi tempore nostrum, facere itaque. Pariatur. -->
    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nisi velit sunt, dicta ratione enim dolorum optio, sapiente illum nemo quam numquam, voluptatem at repellendus id doloribus laudantium asperiores hic. -->

  </div>
  <div id="picture"></div>
</div>
<div id="about2">
  <div class="content">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam architecto expedita sequi et laboriosam aspernatur. Quibusdam ducimus sunt fugiat esse aperiam nemo tempora quia exercitationem saepe. Earum velit natus ut? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam architecto expedita sequi et laboriosam aspernatur. Quibusdam ducimus sunt fugiat esse aperiam nemo tempora quia exercitationem saepe. Earum velit natus ut?
  </div>
  <div id="picture1"></div>
</div>
<?php include("footer.php"); ?>
</center>

</body>
</html>