<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
	<link rel="stylesheet" type="text/css" href="../css/customer_home.css">
	<link rel="stylesheet" type="text/css" href="../css/canteen_home.css">
	<link rel="stylesheet" type="text/css" href="../css/clz_admin_home.css">

	<script type="text/javascript" src="../js/global.js"></script>
</head>
<body>
	<?php 
	session_start();
	include('customer_header.php'); ?>
<div class="container">
	<div class="content-wrap">

<div id="cart">
	<h1>ITEMS ADDED TO CART</h1>
	<div class="cart-box">
		<div class="items-added">
			
			<div class="cart-item">
				<img src="../images/food/burger.jpg">
				<h2>Burger</h2>
				<span>Rs: 15</span>
			</div>

			<div class="cart-item">
				<img src="../images/food/fries.jpg">
				<h2>French Fries</h2>
				<span>Rs: 100</span>
			</div>

			<div class="cart-item">
				<img src="../images/beverage/dew.jpg">
				<h2>Mountain Dew</h2>
				<span>Rs: 40</span>
			</div>
		</div>

		<div class="total order serve">
			<h2>Total: Rs 155</h2>
			<input type="submit" name="order" value="Order">
			<input type="submit" name="serve" value="Serve">
		</div>

		
		
	</div>
	</div>
</div>
</div>
<?php 
	include('../footer.php');
 ?>