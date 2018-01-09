<?php 
	//if (isset($_POST['go'])) {
		if(isset($_POST['n'])){
			$name=$_POST['n'];
	  		if(!empty($name)){
	  		include'db_conn.php';
	  		include'../basic_functions.php';

	  		$query="(select u_id, first_name, last_name, photo from student where first_name like '%$name%') union (select u_id, first_name, last_name, photo from teacher where first_name like '%$name%') union (select u_id, first_name, last_name, photo from other where first_name like '%$name%')";
	  		$result = mysqli_query($conn, $query);
	  		if ($result) {
	  			$nums=mysqli_num_rows($result);

	  			if ($nums>0) {
		  	// 		echo '<table>
		  	// 			<thead>
					// 		<tr>
					// 			<th>Name</th>
					// 			<th>Photo</th>
					// 			<th>Action</th>
					// 		</tr>
					// </thead><tbody>';

					while($row=mysqli_fetch_array($result)){
						//$photo=urlencode($row['photo']);
						//$photo= str_replace(' ', '%20', '../images/users/$pic_name');
						echo "<a href=../process/showuser.php?id=$row[u_id]>
								<div class=search-result>
									<div>
										<img style= width: 100px; src=../images/users/$row[photo]>
									</div>
									<div>
										$row[first_name] $row[last_name]
									</div>
								</div>
								</a>";
					}

					// echo "</tbody></table>";
		  		}
		  		else{
		  			echo "not found";
		  		}
	  		}	
	  	}
	}
?>
<!-- <a href=../process/showuser.php?id=$row[u_id]>Select
<div class="search-result">
	<div>
		<img style= width: 100px; src=../images/users/$row[photo]>
	</div>
	<div>
		$row[first_name] $row[last_name]
	</div>
</div>
</a> -->