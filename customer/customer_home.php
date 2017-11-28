<?php
	include('customer_header.php');
?>

<div class="container">
	<div class="content-wrap">
		<div class="slider">
			<figure>
				<div class="slider-image">
					<img src="images/food/burger-wide.jpg">
					<!-- <figcaption>BURGER</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="images/food/chowmein-wide.jpg">
					<!-- <figcaption>CHOWMEIN</figcaption> -->
				</div class="slider-image">
				<div>
					<img src="images/food/wings-wide.jpg">
					<!-- <figcaption>CHICKEN HOT WINGS</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="images/food/pizza-wide.jpg">
					<!-- <figcaption>PIZZA</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="images/food/fries-wide.jpg">
					<!-- <figcaption>FRENCH FRIES</figcaption> -->
				</div>
			</figure>
		</div>
    
		<div class="featured">
			<p>Featured</p>
			<div id="chicken-momo" class="item">
				<span>Chicken Momo</span>
				<img src="images/food/momo.jpg">
				<span>Price: Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
			<div id="chicken-chowmein" class="item">
				<span>Chicken Chowmein</span>
				<img src="images/food/nonveg_chowmein.jpg">
				<span>Price: Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
			<div id="samosa" class="item">
				<span>Samosa</span>
				<img src="images/food/samosa.jpg">
				<span>Price: Rs 15 (per pc)</span>
				<a href="#">Add to cart</a>
			</div>
			<div id="chaat" class="item">
				<span>Chaat</span>
				<img src="images/food/chaat.jpg">
				<span>Price: Rs 70</span>
				<a href="#">Add to cart</a>
			</div>
		</div>

		<?php 
		include_once('customer/customer_food.php');
		include_once('customer/customer_beverage.php');
		include_once('customer/customer_cart.php');
		?>

 	</div>
</div>