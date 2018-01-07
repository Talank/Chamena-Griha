<?php 
	if (isset($_POST['go'])) {
		$name=($_POST['name']);
	  	if(!empty($name)){
	  		include'db_conn.php';
	  		include'../basic_functions.php';

	  		$query="(select u_id, first_name, last_name, photo from student where first_name like '%$name%') union (select u_id, first_name, last_name, photo from teacher where first_name like '%$name%') union (select u_id, first_name, last_name, photo from other where first_name like '%$name%')";
	  		$result = mysqli_query($conn, $query);
	  		if ($result) {
	  			$nums=mysqli_num_rows($result);

	  			if ($nums>0) {
		  			echo '<table>
		  				<thead>
							<tr>
								<th>Name</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
					</thead><tbody>';

					while($row=mysqli_fetch_array($result)){
						$pic_name=urlencode($row['photo']);
						$photo= str_replace(' ', '%20', '../images/users/$pic_name');
						echo "<tr>";
								echo"<td>$row[first_name] $row[last_name]</td>";
								echo"<td><img src=../images/users/$photo></td>";
								echo"<td><a href=showuser.php?id=$row[u_id]>Select</a></td>";
							echo"</tr>";
					}

					echo "</tbody></table>";
		  		}
	  		}	
	  	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="">
	<input type="text" name="name">
	<input type="submit" name="go" value="go">
	<div>
		
	</div>
</form>
</body>
</html>