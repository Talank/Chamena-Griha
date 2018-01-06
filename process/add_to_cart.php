<?php 
	session_start();
	include_once('db_conn.php');
	include_once('../basic_functions.php');
	if(isset($_GET['food_id'])){
		$food_id=$_GET['food_id'];
		$u_id= $_SESSION['u_id'];
		$query="insert into `cart` values($u_id,$food_id)";
		$result = mysqli_query($conn, $query);
		if ($result) {
			//echo "$nums";
			redirect_to("../customer/customer_food.php?item_added");	
		}
		else
			redirect_to("../customer/customer_food.php?add_not_success");
	}
?>