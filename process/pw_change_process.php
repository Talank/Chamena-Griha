<?php 
include_once '../basic_functions.php';
include_once('db_conn.php');
session_start();

/********************TASKS TO BE DONE VIA JAVASCRIPT********************************************************************************************************************************************************/

//	TO CHECK IF THE NEW USERNAME / PASSWORD PROVIDED BY THE USER IS VALID OR NOT ?


/********************TASKS TO BE DONE VIA PHP********************************************************************************************************************************************************/

//check if the user is logged in or not ?

if (isset($_SESSION['u_id'])) {
	
	if (isset($_POST['request_change'])) {
		//	1) check if the user is valid user or not by asking for old password
		//	2) read new password/ username
		//	3) run update query to change the username and password of the related object on user table.


		$u_id = $_SESSION['u_id'];
		$query = "select * from user where u_id = '$u_id'";
		$result = mysqli_query($conn , $query)
					or die("Error : ".error_connect());
		$row = mysqli_fetch_array($result);

		/********************FETCHING USER INPUTS**********************************************************************************************************************************************************/
		//fetching new password if entered
		if (!empty($_POST['new_password'])) 
			$new_password = $conn->real_escape_string($_POST['new_password']);
		else
			$new_password = $row['password'];

		//fetching new username if entered
		if (!empty($_POST['new_username'])) 
			$new_username = $conn->real_escape_string($_POST['new_username']);
		else
			$new_username = $row['username'];

		//fetching old password
		$old_password = $conn->real_escape_string($_POST['old_password']);

		/********************CHECK VALIDATION OF USERNAME AND PASSWORD*************************************************************************************************************************************/

		if ($old_password == $row['password']) {
			$query = "update user set username = '$new_username' , password = '$new_password' where u_id = $u_id";
			if (mysqli_query($conn , $query))
				redirect_to("../index.php?changes_succesfully_execued");

			else
				redirect_to("../pw_change.php?operation_failed");
		}
		else
			redirect_to("../pw_change.php?password_wrong");
	}
}
else 
	redirect_to("../index.php?login_with_chamena_griha");
?>