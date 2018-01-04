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

<div id="food" >
	<h1>FOOD MENU</h1>
	<div class="food-menu">
		<div class="food-item">
			<div class="row1">
				<img src="../images/food/momo.jpg">
			</div>
			<div class="row2">
				<h2>Chicken Momo</h2>
				<span>Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<div class="food-item">
			<div class="row1">
				<img src="../images/food/samosa.jpg">
			</div>
			<div class="row2">
				<h2>Samosa</h2>
				<span>Rs 15</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<div class="food-item">
			<div class="row1">
				<img src="../images/food/pizza.jpg">
			</div>
			<div class="row2">
				<h2>Pizza</h2>
				<span>Rs 300</span>
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