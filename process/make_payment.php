<?php 
	if (isset($_POST['update'])) {
		include_once '../basic_functions.php';
		include_once 'db_conn.php';

		$tender=$conn->real_escape_string($_POST['tender']);
		$amount=$conn->real_escape_string($_POST['amount']);
		$dueAmount=$conn->real_escape_string($_POST['dueAmount']);
		$u_id= $conn->real_escape_string($_POST['u_id']);

		$query="update account set amount=(amount-$tender) where u_id=$u_id";
			$result = mysqli_query($conn, $query);
			if ($result) {
				redirect_to("../index.php");	
			}
			else
				redirect_to("../index.php");
	}
 ?>