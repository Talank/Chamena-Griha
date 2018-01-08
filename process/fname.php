 <?php
if ($_SESSION['type']==0)
	$table = "student";
else if ($_SESSION['type']==1)
	$table = "teacher"; 
else if ($_SESSION['type']==2)
	$table = "other"; 
else if ($_SESSION['type']==3)
	$table = "collegeAdmin";
else
	$table = "canteen";  

$u_id= $_SESSION['u_id'];

$query = "select first_name from `{$table}` where u_id =$u_id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$firstname = $row['first_name'];
?>