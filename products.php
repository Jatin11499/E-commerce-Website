<?php
	require 'includes/common.php';
?>
<!DOCTYPE>
<html>
	<head>
		<title>Products Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';
			include 'includes/check-if-added.php';	
		?>
		<div class="container">
			<div class="row">
				<div class="jumbotron col-md-12" style="margin:40px 0;">
				<center>
				<h1 style="font-size:65px;">Welcome to our Lifestyle Store!</h1>
				<h5>We have the best Cameras, Watches and Shirts for you. No need to hunt around, we have all in one place.</h5>
				</center>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail">
					<img src="images/5.jpg" alt="camera" class="img-fluid">
					<center class="contentt">
						<h4><b>Canon EOS</b></h4>
						<p>Price: Rs.36,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(1)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=1" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center>
					</div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/2.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Sony DSLR</b></h4>
						<p>Price: Rs.40,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(2)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=2" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/3.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Sony DSLR</b></h4>
						<p>Price: Rs.50,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(3)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=3" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/4.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Olympus DSLR</b></h4>
						<p>Price: Rs.80,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(4)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=4" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/9.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Titan Model #301</b></h4>
						<p>Price: Rs.13,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(5)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=5" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/10.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Titan Model #201</b></h4>
						<p>Price: Rs.3,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(6)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=6" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/11.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>HMT Milan</b></h4>
						<p>Price: Rs.8,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(7)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=7" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/12.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Faber Luba #111</b></h4>
						<p>Price: Rs.18,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(8)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=8" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/15.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>H &amp W</b></h4>
						<p>Price: Rs.800.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(9)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=9" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/6.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Luis Phil</b></h4>
						<p>Price: Rs.1,000.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(10)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=10" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/13.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>John Zok</b></h4>
						<p>Price: Rs.1,500.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(11)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=11" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
				<div class="col-md-3 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/14.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Jhalsani</b></h4>
						<p>Price: Rs.1,300.00</p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<a type="button" class="btn btn-primary btn-block" href="login.php">Buy Now</a>
						<?php }
						else { if(check_if_added_to_cart(12)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=12" name="add" value="add">Add to cart</a>
						<?php } }?>
					</center></div>
				</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>