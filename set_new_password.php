<?php
	if (!isset($_SESSION['email'])) {
		header("Location: index.php");
        exit();
    }
	
	include_once('basic_functions.php');
	if (isset($_POST['set_pw'])) {
		include_once('db_conn.php');
		$new_password = $_POST['new_password'];
		$email = $_SESSION['email'];
		$query = "UPDATE user SET password='$new_password', forgot_pw_token=NULL WHERE email='$email'";
		mysqli_query($conn , $query);
		unset($_SESSION['email']);
		header("Location: ../index.php");
        exit();
	}
 ?>

<section>
	<div>
		<p>please enter the new password.</p>
		<form method="post">
			<input type="password" name="new_password" placeholder="New Password">
			<input type="password" name="confirm_password" placeholder="Confirm Password">
			<input type="submit" name="set_pw" value="Change">			
		</form>
	</div>
</section>
