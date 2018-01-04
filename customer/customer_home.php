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
	include('customer_header.php');
?>
<section class="container">
<div class="container">
	<div class="content-wrap">
		<div class="slider">
			<figure>
				<div class="slider-image">
					<img src="../images/food/burger-wide.jpg">
					<!-- <figcaption>BURGER</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="../images/food/chowmein-wide.jpg">
					<!-- <figcaption>CHOWMEIN</figcaption> -->
				</div class="slider-image">
				<div>
					<img src="../images/food/wings-wide.jpg">
					<!-- <figcaption>CHICKEN HOT WINGS</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="../images/food/pizza-wide.jpg">
					<!-- <figcaption>PIZZA</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="../images/food/fries-wide.jpg">
					<!-- <figcaption>FRENCH FRIES</figcaption> -->
				</div>
			</figure>
		</div>
    
		<div class="featured">
			<p>Featured</p>
			<div id="chicken-momo" class="item">
				<span>Chicken Momo</span>
				<img src="../images/food/momo.jpg">
				<span>Price: Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
			<div id="chicken-chowmein" class="item">
				<span>Chicken Chowmein</span>
				<img src="../images/food/nonveg_chowmein.jpg">
				<span>Price: Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
			<div id="samosa" class="item">
				<span>Samosa</span>
				<img src="../images/food/samosa.jpg">
				<span>Price: Rs 15 (per pc)</span>
				<a href="#">Add to cart</a>
			</div>
			<div id="chaat" class="item">
				<span>Chaat</span>
				<img src="../images/food/chaat.jpg">
				<span>Price: Rs 70</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<!-- <?php 
		// include_once('customer_food.php');
		// include_once('customer_beverage.php');
		// include_once('customer_cart.php');
		?> -->

 	</div>
</div>
</section>
<?php 
	include('../footer.php');
 ?>