<?php 
	session_start();
	$title = "new password";
	include('../header_sec.php');
 ?>

<?php
	// session_start();
	if (isset($_GET['token']) && isset($_GET['email'])) {
		include_once('../basic_functions.php');
		include_once('db_conn.php');
		//$conn = new mysqli("localhost", "root", "", "casdb");
		$email = $conn->real_escape_string($_GET['email']);
		$token = $conn->real_escape_string($_GET['token']);

		$check_existence_query = "SELECT * FROM user WHERE email='$email' AND forgot_pw_token='$token'";
			$result = mysqli_query($conn , $check_existence_query)
                    or die("Error : ".error_connect());
        	$row = mysqli_fetch_array($result);
			
			if($row){
				$_SESSION['email']= $email;
				//include('../header.php');
				// echo '
				// 	<div>
				// 		<form method="post">
				// 			<input type="password" name="new_password" placeholder="New Password">
				// 			<input type="password" name="confirm_password" placeholder="Confirm Password">
				// 			<input type="submit" name="set_pw" value="Change">			
				// 		</form>
				// 	</div>
				// 	';
				include('../set_new_password.php');
				//include('../footer.php');

				// if (isset($_POST['set_pw'])) {
				// 	$new_password = $conn->real_escape_string($_GET['new_password']);;
				// 	$query = "UPDATE user SET password='$new_password', forgot_pw_token='' WHERE email='$email'";
				// 	mysqli_query($conn , $query);
				// }

			}
			else
				redirect_to("../index.php");
	}

	else{
		if(getcwd() == 'C:\wamp64\www\Canteen')
			include_once('basic_functions.php');
		else
			include_once('../basic_functions.php');

		redirect_to("../index.php?please_login_with_chamena_griha");
	}
 ?>

<?php 
	include('../footer.php');
 ?>

 <!-- <div>
 	<form method="post">
		<input type="password" name="password" placeholder="password">
		<input type="password" name="confirm_password" placeholder="confirm password">
		<input type="submit" name="set_pw" value="Change">			
	</form>
 </div> -->