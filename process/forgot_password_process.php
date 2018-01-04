<?php 
	if(getcwd() == 'C:\wamp64\www\Canteen')
		include_once('basic_functions.php');
	else
		include_once('../basic_functions.php');
?>

<?php 
	if (isset($_POST['forgot_password'])) {
		include_once('db_conn.php');
		$email = addslashes($_POST['email']);
		//$email = mysqli_real_escape_string ($conn , string '$email');
		
		$query = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		if ($row) {
			$string = "1234567890qwertyuiopasdfghjklzxcvbnm";
			$string = str_shuffle($string);
			$string = substr($string, 5, 15);
			$url = "localhost/Canteen/process/reset_password.php?token=$string&&email=$email";
			//mail($email, "Reset Password", "Dear user,<br>You have requested for resetting your password for Chamena Griha. Please click on the link to reset: $url", "FROM: talank@gces.edu.np\r\n");
			$query = "UPDATE user SET forgot_pw_token='$string' WHERE email='$email'";
			if(mysqli_query($conn, $query)){
				//print a message "check your email" via js
				redirect_to("../forgot_password.php");
			}

/******************************************TRYING TO SETEXPIERY DATE FOR TOKEN FOR SECURITY***********************************/

			// $sql = (CREATE TRIGGER expire_forgot_password_token_trigger
		 //    AFTER UPDATE ON user
		 //    EXECUTE PROCEDURE expire_forgot_password_token();

		 //    CREATE FUNCTION expire_forgot_password_token()
		    	
			// 	);

		}
	}
 ?>