<?php 
	session_start();
	$title = "password change";
	include('header.php');
 ?>
 <style>
	body {
		margin: 0;
		padding: 0;
		background-image: none;
		background-size: cover;
	}
</style>

<header class="customer">
	<div class="content-wrap">
		<div>
			<nav>
				<img src="images/logo.PNG">
				<a href="index.php">Home</a>

				<?php 
					/*IF THE USER IS LOGGED IN THEN DISPLAY LOGOUTBUTTON
					----------------------------------------------------*/
					if (isset($_SESSION['u_id'])){
						echo'<form action="process/logout_process.php" method = get>
								<button type="submit" name="logout">Logout</button>
							</form>';
					}
				?>

			</nav>
				
				<div>
	 				<a href="pw_change.php">Change password</a>
				</div>
		</div>
	</div>
</header>

<section class="container">
	<div>
		<p>Leave the field blank if you don't want to change.</p>
		<p>Old username and password must be entered</p>
		<form method="post" action="process/pw_change_process.php">
			<input type="password" name="old_password" placeholder="old_password">
			<input type="text" name="new_username" placeholder="new_username">
			<input type="password" name="new_password" placeholder="new_password">
			<input type="submit" name="request_change" value="request change">
		</form>
	</div>
</section>

<?php 
	include('footer.php');
 ?>