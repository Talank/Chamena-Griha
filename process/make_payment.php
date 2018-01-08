<?php 
	if (isset($_POST['update'])) {
		include_once '../basic_functions.php';
		include_once 'db_conn.php';

		// $tender=$conn->real_escape_string($_POST['tender']);
		// $amount=$conn->real_escape_string($_POST['amount']);
		// $dueAmount=$conn->real_escape_string($_POST['dueAmount']);
		// $u_id= $conn->real_escape_string($_POST['u_id']);

		$tender=$_POST['tender'];
		//$amount=$_POST['amount'];
		$dueAmount=$_POST['dueAmount'];
		$u_id= $_POST['u_id'];

		$query="select amount from `account` where u_id='$u_id'";
		// echo $query;
		// die();
			$result = mysqli_query($conn, $query);
			$nums=mysqli_num_rows($result);
			if ($nums>0) {
				$row=mysqli_fetch_array($result);
				$amount= $row['amount']-$tender;
				$query="update `account` set amount='$amount' where u_id='$u_id'";
					$result = mysqli_query($conn, $query);
					if ($result) {
						redirect_to("../college/college_home.php?success");	
					}
					else
						redirect_to("../college/college_home.php?not_success1");
			}
			else
						redirect_to("../college/college_home.php?not_success2");
	}
 ?>