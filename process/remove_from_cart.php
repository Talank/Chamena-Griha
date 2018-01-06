<?php 
	session_start();
	include_once('db_conn.php');
	include_once('../basic_functions.php');
	if(isset($_GET['food_id'])){
		$food_id=$_GET['food_id'];
		$u_id= $_SESSION['u_id'];
		$query="delete from `cart` where u_id=$u_id and food_id=$food_id";
		$result = mysqli_query($conn, $query);
		if ($result) {
			//echo "$nums";
			redirect_to("../customer/customer_cart.php?item_removed");	
		}
		else
			redirect_to("../customer/customer_cart.php?remove_not_success");
	}
?>