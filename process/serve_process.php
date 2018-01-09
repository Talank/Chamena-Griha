<?php 
	session_start();
	if ($_GET['serve']) {
		include'../basic_functions.php';
		include'db_conn.php';
		$u_id=$_SESSION['u_id'];
		$query="update cart set status=2 where u_id='$u_id'";
		$result = mysqli_query($conn, $query);		
		if($result>0){
			redirect_to("../customer/customer_cart.php?msg=serve_success");
		}
		else
			redirect_to("../customer/customer_cart.php?msg=serve_not_success");
	}
 ?>