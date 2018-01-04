<?php 
	session_start();

	include_once '../basic_functions.php';

	if (isset($_POST['signup'])) {
		include_once 'db_conn.php';

		$firstname = $conn->real_escape_string($_POST['firstname']);
		$lastname = $conn->real_escape_string($_POST['lastname']);
		$username = $conn->real_escape_string($_POST['username']);
		$password = $conn->real_escape_string($_POST['password']);
		$user_type = $conn->real_escape_string($_POST['userType']);
		$gender = $conn->real_escape_string($_POST['gender']);
		$contact = $conn->real_escape_string($_POST['contact']);
		$email = $conn->real_escape_string($_POST['email']);

		//fetching image file
		//$image = addslashes(file_get_contents($_FILES['userPic']['tmp_name']));
		//$image_name = addslashes($_FILES['userPic']['name']);			//code for image name not needed now
		//$image_size = getimagesize($_FILES['userPic']['tmp_name']);	//code to get img size.. useful to validate 																//	the file is image or not


		




		$check_existence_query = "SELECT * FROM user WHERE username = '$username'";
			$result = mysqli_query($conn , $check_existence_query)
                    or die("Error : ".error_connect());
        	$row = mysqli_fetch_array($result);
			
			if($row){
				redirect_to("../signup.php?username=existed");
			}

			else {

				/********************INSERTING THE DATA INTO THE USER TABLE********************************************************************************************************************************************************/

				if($user_type == "000")
					$type = 0;
				elseif ($user_type == "001")
					$type = 1;
				else
					$type = 2;
				$query = "insert into user(username,password,type,email) values('$username','$password',$type,'$email')"; 
				if (mysqli_query($conn , $query)) {
					$query = "select * from user where username = '$username'";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);
		        	$u_id = $row['u_id'];

		        	/********************INITIALIZING THE SESSIONS********************************************************************************************************************************************************/

		        	$_SESSION['username']= $username;
					//$_SESSION['password']= $password;
					$_SESSION['u_id']= $row['u_id'];
		        						
		        	if ($type == 0)
		        		$table = 'student';
		        	elseif ($type == 1) 
		        		$table = 'teacher';
		        	elseif ($type == 2) 
		        		$table = 'other';
		        	elseif($type == 3)
		        		$table = 'clzAdmin';
		        	else
		        		$table = 'canteen';

		        	$_SESSION['type']= $table;

		        	/********************INSERTING THE DATA INTO THE ACCOUNT TABLE********************************************************************************************************************************************************/

		        	$query = "insert into account(amount,u_id) values(0,$u_id)";
		        	mysqli_query($conn, $query);

		        	$query = "select * from account where u_id = $u_id";
		        	$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					$account_no = $row['account_no'];

					/********************INSERTING THE DATA INTO THE TABLE OF RESPECTIVE TYPE********************************************************************************************************************************************************/
					if ($table == 'student') {
						$reg_id = $conn->real_escape_string($_POST['regId']);
						$query = "insert into student(reg_id,first_name,last_name,u_id,photo,account_no,phone,gender) values($reg_id,'$firstname','$lastname',$u_id,'$image',$account_no,$contact,'$gender')";
					}

					else
		        	$query = "insert into `{$table}`(first_name,last_name,u_id,photo,account_no,phone,gender) values('$firstname','$lastname',$u_id,'$image',$account_no,$contact,'$gender')";

		        	if(mysqli_query($conn, $query)){
		        		$query = "select * from `{$table}` where u_id = $u_id";
		        		$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_array($result);
		        		$pic = $row['photo'];

		        		/********************CODE TO DISPLAY IMAGE********************************************************************************************************************************************************/
		        		//echo '<img src="data:image/jpeg;base64,'.base64_encode($pic).'" id= "userPic">';
		        		redirect_to("../index.php?signup=success");
		        	}

		        	else{
		        		redirect_to("../signup.php?process=failed_while_adding");
		        	}
				}
				else
					redirect_to("../signup.php?process=failed");
		    }             
	}
 ?>