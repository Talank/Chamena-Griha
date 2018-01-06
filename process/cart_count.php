<?php 
	if (isset($_SESSION['u_id'])) {
		include 'db_conn.php';
		$u_id=$_SESSION['u_id'];
		$query="select food_id from cart where u_id=$u_id";
		$result = mysqli_query($conn, $query);
		$number_on_cart=mysqli_num_rows($result);	
	}
?>