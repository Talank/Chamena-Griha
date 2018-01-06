<?php 
	session_start();
	include_once('db_conn.php');
	include_once('../basic_functions.php');
	if(isset($_GET['food_id'])){
		$food_id=$_GET['food_id'];
		$u_id= $_SESSION['u_id'];
		//check if the food is already added to cart
		$query="SELECT * FROM cart WHERE u_id=$u_id AND food_id=$food_id)";
		$result = mysqli_query($conn, $query);
		$nums=mysqli_num_rows($result);
		if($nums>0){
			$row=mysqli_fetch_array($result);
			$item_id=$row['item_id'];
			$query="update cart set quantity=quantity+1 where item_id=$item_id";
			$result = mysqli_query($conn, $query);
			if ($result) {
				redirect_to("../customer/customer_food.php?item_added_u_id=$u_id");	
			}
			else
				redirect_to("../customer/customer_food.php?add_not_success1");
		}
		else
		{
			$query="insert into cart (u_id,food_id,quantity,status) values($u_id,$food_id,1,0)"; 
			//status 0 for Order and 1 for serve
			
			$result = mysqli_query($conn, $query);
			if ($result) {
				redirect_to("../customer/customer_food.php?item_added_u_id=$u_id&&food_id=$food_id");	
			}
			else
				redirect_to("../customer/customer_food.php?add_not_success2");
		}
	}
?>