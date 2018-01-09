<?php 
	if(isset($_POST["view"])){
		include'../basic_functions.php';
		include'db_conn.php';
		if($_POST["view"] != ''){
			//$query = "UPDATE cart SET status=2 WHERE status=1";
			//$result = mysqli_query($conn, $query);		
			//$nums=mysqli_num_rows($result);

			$query= "select count(status) from cart where status=2";
			$result= mysqli_query($conn, $query);
			$count=echo "$result";
		}
		date_default_timezone_set('Asia/Kathmandu');
		$date=date("Y/m/d");
		$time=date("h:i:s");
		$clock=date("a");

		$data = array(
			  'notification'   => $output,
			  'unseen_notification' => $count
			 );
		echo json_encode($data);
	}
 ?>