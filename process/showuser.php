<!DOCTYPE html>
<html>
<head>
	<title>Show User</title>
</head>
<body>
	<?php 
		if (isset($_GET['id'])) {
			$u_id=$_GET['id'];
			$qurry="select * from users where u_id like $u_id";
			$result = mysqli_query($conn, $query);
		  	if ($result) {
	  			$nums=mysqli_num_rows($result);
	  			if ($nums>0) {
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
					$row = mysqli_fetch_array($result);


	  			}
		}
	 ?>
	 <!-- INSERT THE HTML CODE FOR DISPLAYING USER INFO 
	 	THE INFO CONTAINS PHOTO NAME, REG NUM, AMOUNT TO PAY,AMOUNT PAID, DUE AND A OPTION TO PRINT BILL -->
	 <div>
	 	
	 </div>
</body>
</html>