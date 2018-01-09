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

<div id="beverage" >
	<h1 style="display: inline-block;">BEVERAGES</h1>
	<div class="beverage-menu">
		<div class="beverage-item">
			<div class="row1">
				<img src="../images/beverage/coke.jpg">
			</div>
			<div class="row2">
				<h2>Coke</h2>
				<span>Rs 50</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<div class="beverage-item">
			<div class="row1">
				<img src="../images/beverage/milk_coffee.jpg">
			</div>
			<div class="row2">
				<h2>Milk Coffee</h2>
				<span>Rs 50</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<div class="beverage-item">
			<div class="row1">
				<img src="../images/beverage/lassi.jpg">
			</div>
			<div class="row2">
				<h2>Plain Lassi</h2>
				<span>Rs 70</span>
				<a href="#">Add to cart</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php 
	include('../footer.php');
 ?>