<!doctype html>


<?php

$name = '';
$email = '';
$cake = '';
$address = '';

?>
<style type="text/css">
body{
		background-image: url(bg.jpg);
		background-size: cover; 
		background-attachment: fixed; 
		
}
</style>
<head>
			<meta charset="uft-8">
			<title>ORDER PAGE</title>
			<link rel="stylesheet" href="style.css">

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					
					
	<header>
	
			<nav>
		<div id='cssmenu'>
				<ul>
				   <li class='active has-sub'><a href='index.php'><span>Home</span></a></li>
				   <li class='active has-sub'><a href='order.php'><span>Order Now</span></a>
					 
				   
				   <li class='active has-sub'><a href='about.php'><span>About Us</span></a></li>
				   
							
				</ul>
				
				</div>
		</nav>
		<br>
	
	</header>
	</head>	
	
	<body>
	<main>
	<div class="container">
	<form action="mail.php" method="post">
						<div class="form-group">
							<label>Enter Name</label>
							<input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
						</div>
						<div class="form-group">
							<label>Enter Email</label>
							<input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
						</div>
						<div class="form-group">
							<label>Which cake do you want?</label>
							<input type="text" name="cake" class="form-control" placeholder="eg. chocolate cake " value="<?php echo $cake; ?>" />
						</div>
						<div class="form-group">
							<label>Enter Delivery Address</label>
							<textarea name="address" class="form-control" placeholder="Enter Address"><?php echo $address; ?></textarea>
						</div>
						<div class="form-group" align="center">
							<input type="submit" name="submit" value="ORDER NOW" class="btn btn-info" />
						</div>
						
					</form>
					</div>
                    <div id="info">
			    <ul>
				<li>Best Price</li>
				<li>100% Refund</li>
				<li>Fresh cakes</li>
                <li>Fast Delivery</li>
				
			    </ul>
		        </div>


				</main>
		</body>
		
