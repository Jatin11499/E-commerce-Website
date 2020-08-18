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
		<title>SignUp Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div class="container">
			<div class="row">
			<div class="col-md-5 mx-auto sign">
				<form method="post" action="signup_script.php">
					<h1>SIGN UP</h1>
					<div class="form-group"><input type="text" class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" id="name"></div>
					<div class="form-group"><input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="Password" name="pass" pattern=".{8,}" id="pass"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="Contact" name="con" maxlength="10" size="10" id="con"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="City" name="city" id="city"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="Address" name="add" id="add"></div>
					<button class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>