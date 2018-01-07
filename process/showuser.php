<!-- <!DOCTYPE html>
<html>
<head>
	<title>Show User</title>
</head>
<body> -->
	<?php 
		if (isset($_GET['id'])) {
			include_once '../basic_functions.php';
			include_once 'db_conn.php';

			$u_id=$_GET['id'];
			$query="select type from user where u_id like $u_id";
			$result = mysqli_query($conn, $query);
		  	if ($result) {
	  			$nums=mysqli_num_rows($result);
	  			if ($nums>0) {
	  				$row = mysqli_fetch_array($result);
	  				$type=$row['type'];
	  				if ($type == 0)
						$table = 'student';
					elseif ($type == 1) 
						$table = 'teacher';
					elseif ($type == 2) 
						$table = 'other';
					elseif($type == 3)
						$table = 'collegeadmin';
					else
						$table = 'canteen';

					$query = "select * from `{$table}` where u_id = $u_id";
					$result = mysqli_query($conn, $query);
					$nums=mysqli_num_rows($result);
					if ($nums>0) {
						$row = mysqli_fetch_array($result);
						$photo=urlencode($row['photo']);
						//$photo= str_replace(' ', '%20', '../images/users/$pic_name');
						echo "<div>";
						echo "<div>
						 			<img src=../images/users/$photo>
							 	</div>
							 	<div>
							 		<p>NAME: $row[first_name] $row[last_name]</p>
							 	</div>";
							 	
							 	if($type==0){
							 		echo"<div>
							 			REGESTRATION #: $row[reg_id]
							 		</div>";
								}

						$query2 = "select amount from `account` where u_id = $u_id";
						$result2 = mysqli_query($conn, $query2);
						$nums2=mysqli_num_rows($result2);
						if ($nums2>0) {
							$row2 = mysqli_fetch_array($result2);

							echo "<div>
								 	AMOUNT: $row2[amount]
								 </div>";
								 	
						}
						echo"</div>";
					}
	  			}
			}
		}
	 ?>
	 <!-- INSERT THE HTML CODE FOR DISPLAYING USER INFO 
	 	THE INFO CONTAINS PHOTO NAME, REG NUM, AMOUNT TO PAY,AMOUNT PAID, DUE AND A OPTION TO PRINT BILL -->
	 <!-- <div>
	 	<div>
	 		<img src=../images/users/$row[photo]>
	 	</div>
	 	<div>
	 		<p>NAME: $row[first_name] $row[last_name]</p>
	 	</div>
	 	
	 	if($type==0){
	 		<div>
	 			REGESTRATION #: $row[reg_id]
	 		</div>
	 	}
	 	<div>
	 		AMOUNT: $row2['amount']
	 	</div>
	 </div> -->
<!-- </body>
</html> -->