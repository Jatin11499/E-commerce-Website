<?php
	require 'includes/common.php';
?>
<!DOCTYPE>
<html>
	<head>
		<title>Login Page</title>
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
			<div class="col-md-6 mx-auto">
			<div class="card">
				  <div class="card-header bg-primary text-light">LOGIN</div>
				  <div class="card-body">
				  <form method="post" action="login_submit.php">
						<p class="card-text text-danger">Login to make a purchase</p>
						<div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email"></div>
						<div class="form-group"><input type="password" name="pass" placeholder="Password" class="form-control" pattern=".{8,}" id="pass"></div>
						<button class="btn btn-primary" type="submit">Login</button>
				  </form>
				  </div>
				  <div class="card-footer">Don't have an account? <a href="signup.php" class="text-primary">Register</a></div>
			</div>
			</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>