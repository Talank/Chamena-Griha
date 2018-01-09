<style>
	body {
		margin: 0;
		padding: 0;
		background-image: none;
		background-size: cover;
	}
</style>

<header class="canteen">
	<div class="content-wrap">
		<img src="../images/logo.PNG">
		<div class="nav-canteen">
			<ul>
				<li><a href="../index.php" class="cool-links">Home</a></li>
				<li><a href="canteen_food.php" class="cool-links">Food</a></li>
				<li><a href="canteen_beverage.php" class="cool-links">Beverage</a></li>
				<li><label class="search-box">
						<input type="text" name="search" placeholder="Search" class="search">
						<i class="fa fa-search" aria-hidden="true"></i>
					</label>
				</li>
				<li><a href="canteen_notification.php" class="notification"><i class="fa fa-bell-o" aria-hidden="true"></i>
					<span style="font-size: 13px; margin-left: 3px;" id="number_on_notification">
						<?php 
							include'../process/db_conn.php';
							$query= "select distinct u_id from cart where status=2";
							$result= mysqli_query($conn, $query);
							if ($result) {
								$nums=mysqli_num_rows($result);
								$row= mysqli_fetch_array($result);
								echo "$nums";
							}
						 ?>
					</span>
				</a></li>
			</ul>
		</div>	
		<div class="acc-settings">
			 <label class="acc">
			 	<span style="color: #fff;">
			 	Canteen</span>
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