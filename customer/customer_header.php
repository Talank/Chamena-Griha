<!-- <?php 
	// if(getcwd() == 'C:\wamp64\www\Canteen')
	// 	include_once('basic_functions.php');
	// else
	// 	include_once('../basic_functions.php');
 ?> -->



<style>
	body {
		margin: 0;
		padding: 0;
		background-image: none;
		background-size: cover;
	}
</style>
<?php include('../process/cart_count.php'); ?>
<header class="customer">
	<div class="content-wrap">
		<img src="../images/logo.PNG">
		<div class="nav-customer">
			<ul>
				<li><a href="../index.php" class="cool-links">Home</a></li>
				<li><a href="customer_food.php" class="cool-links">Food</a></li>
				<li><a href="customer_beverage.php" class="cool-links" >Beverage</a></li>
				<li><label class="search-box">
						<input type="text" name="search" placeholder="Search" class="search">
						<i class="fa fa-search" aria-hidden="true"></i>
					</label>
				</li>
				<li><a href="customer_cart.php" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<span style="font-size: 13px; margin-left: 3px;" id="number_on_cart">
						<?php echo "$number_on_cart"; ?>
					</span></a></li>
			</ul>
		</div>	
		<div class="acc-settings">
			 <label class="acc">
			 	<span style="color: #fff;">
			 	<?php  
			 		include_once('../process/db_conn.php');
					include('../process/fname.php');
					echo"$firstname";
				 ?>
			 	</span>
				<i  onclick="myFunction()" class="fa fa-user-o dropbtn" aria-hidden="true"></i>
			</label>
			<div id="myMenu" class="menu">
				<a href="#">Your profile</a>
				<a href="../pw_change.php">Change password</a>
				<a href="../process/logout_process.php">Sign out</a>
			</div>
		</div>
		
	</div>
</header>