<?php
	require 'includes/common.php';
	if(isset($_SESSION['email']))
	{
		header('Location:products.php');
	}
?>
<!DOCTYPE>
<html>
	<head>
		<title>Lifestyle Store</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div id="banner_image">
			<div class="container">
				<center>
					<div id="label">
						<p id="l1">We sell lifestyle.</p>
						<p>Flat 40% off on premium brands</p>
						<a href="products.php"><button class="btn btn-danger btn-lg" style="margin-top:20px;">Shop Now</button></a>
					</div>
				</center>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 top_buffer">
				<div class="col-md-12 img-thumbnail">
					<img src="images/1.jpg" class="img-fluid">
					<center class="pad">
					<h2>Cameras</h2>
					<p>Choose among the best available in the world.</p>
					</center>
				</div>
				</div>
				<div class="col-md-4 top_buffer">
				<div class="col-md-12 img-thumbnail">
					<img src="images/7.jpg" class="img-fluid">
					<center class="pad">
					<h2>Watches</h2>
					<p>Original watches from the best brands.</p>
					</center>
				</div>
				</div>
				<div class="col-md-4 top_buffer">
				<div class="col-md-12 img-thumbnail">
					<img src="images/8.jpg" class="img-fluid">
					<center class="pad">
					<h2>Shirts</h2>
					<p>Our exquisite collection of shirts.</p>
					</center>
				</div>
				</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>