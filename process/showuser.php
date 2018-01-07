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
  			}
	}
 ?>