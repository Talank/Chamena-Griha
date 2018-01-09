<?php 
	if(getcwd() == 'C:\wamp64\www\Canteen')
		include_once('basic_functions.php');
	else
		include_once('../basic_functions.php');
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
			</ul>
		</div>
		<div class="college-name">
			<h2>Gandaki College of Engineering and Science</h2>
			<!-- <h6>Lamachour, Pokhara-Lekhnath</h6> -->
		</div>	
		<div class="acc-settings">
			 <label class="acc">
			 	<span style="color: #fff;">
			 	<!-- <?php  
			// include('process/fname.php');
			// echo"$firstname";
			 ?>-->
			 	GCES</span>
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