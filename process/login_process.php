<?php
	session_start();

	include_once '../basic_functions.php';
	include_once('db_conn.php');
	if (isset($_POST['login'])) {
		$username = $conn->real_escape_string($_POST['username']);
		$password = $conn->real_escape_string($_POST['password']);

		$query = "SELECT * FROM user WHERE username = '$username'";
		$result = mysqli_query($conn , $query);
//					or die("Error : ".error_connect());
		$row = mysqli_fetch_array($result);

		if ($row){
			if (md5($password) == ($row['password'])) {
				$error_msg="";
				$_SESSION['username']= $username;
				$_SESSION['u_id']= $row['u_id'];
				$_SESSION['type']= $row['type'];
			redirect_to("../index.php?login=success");
			}
			else{
				redirect_to("../index.php?password_wrong");
				$error_msg="password wrong";
			}
		}

		else{
			redirect_to("../index.php?username_not_found");
				$error_msg="username not found";
		}
	}

 ?>
