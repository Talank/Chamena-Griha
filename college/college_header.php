<?php 
	if(getcwd() == 'C:\wamp64\www\Canteen')
		include_once('basic_functions.php');
	else
		include_once('../basic_functions.php');
 ?>

<style>
	body {
		margin: 0;
		padding: 0;
		background-image: none;
		background-size: cover;
	}

	.search{
	width: 530px;
	}

	@media (max-width:1400px) {
    .search {
        width: 470px;
    }
}

</style>

<header class="clz_admin">
	<div class="content-wrap">
		<img src="../images/logo.PNG">
		<div class="nav-college">
			<ul>
				<li><a href="../index.php" class="cool-links">Home</a></li>
				<li><label class="search-box">
						<input type="text" name="search" placeholder="Search" class="search">
						<i class="fa fa-search" aria-hidden="true"></i>
					</label>
				</li>
			</ul>
		</div>	
		<div class="acc-settings">
			 <label class="acc">
			 	<span style="color: #fff;">
			 	<!-- <?php  
			// include('process/fname.php');
			// echo"$firstname";
			 ?>-->
			 	Prajwal</span>
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