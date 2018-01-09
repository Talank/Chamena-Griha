<?php 
	session_start();
	include_once('db_conn.php');
	include_once('../basic_functions.php');
	if(isset($_GET['u_id'])){
		$u_id= $_GET['u_id'];
		$query="delete from `cart` where u_id=$u_id";
		$result = mysqli_query($conn, $query);
		if ($result) {
			//echo "$nums";
			redirect_to("../canteen/canteen_notification.php?item_removed");	
		}
		else
			redirect_to("../canteen/canteen_notification.php?remove_not_success");
	}
?>