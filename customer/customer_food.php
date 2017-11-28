<?php 
	if(getcwd() == 'C:\wamp64\www\Canteen')
		include_once('basic_functions.php');
	else
		include_once('../basic_functions.php');
?>

<div id="food" >
	<h1>FOOD MENU</h1>
	<div class="food-menu">
		<div class="food-item">
			<div class="row1">
				<img src="images/food/momo.jpg">
			</div>
			<div class="row2">
				<h2>Chicken Momo</h2>
				<span>Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<div class="food-item">
			<div class="row1">
				<img src="images/food/samosa.jpg">
			</div>
			<div class="row2">
				<h2>Samosa</h2>
				<span>Rs 15</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<div class="food-item">
			<div class="row1">
				<img src="images/food/pizza.jpg">
			</div>
			<div class="row2">
				<h2>Pizza</h2>
				<span>Rs 300</span>
				<a href="#">Add to cart</a>
			</div>
		</div>
	</div>
</div>