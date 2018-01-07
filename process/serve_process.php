<?php 
	session_start();
	include'../basic_functions.php';
	include'db_conn.php';

	if (isset($_GET['serve'])) {
		$u_id=$_SESSION['u_id'];
		$query="select * from cart where u_id=$u_id";
		$result = mysqli_query($conn, $query);		
		$nums=mysqli_num_rows($result);
		if($nums>0){
			while($row=mysqli_fetch_array($result)){
				$food_id=$row['food_id'];
				$query2="delete from `cart` where u_id=$u_id and food_id=$food_id";
				$result2 = mysqli_query($conn, $query2);
			}
			redirect_to("../customer/customer_home.php?serve_success");
		}
	}
 ?>