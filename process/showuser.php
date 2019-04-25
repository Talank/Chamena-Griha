<!DOCTYPE html>
<html>
<head>
	<title>Show User</title>
</head>
<body>
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
						 			<img src=../images/users/$photo style='width: 200px;'>
							 	</div>
							 	<br>
							 	<div>
							 		<p>NAME: $row[first_name] $row[last_name]</p>
							 	</div>
							 	<br>";
							 	
							 	if($type==0){
							 		echo"<div>
							 			REGESTRATION #: $row[reg_id]
							 		</div>
							 		<br>";
								}

						$query2 = "select amount from `account` where u_id = $u_id";
						$result2 = mysqli_query($conn, $query2);
						$nums2=mysqli_num_rows($result2);
						if ($nums2>0) {
							$row2 = mysqli_fetch_array($result2);

							echo "<div>
								 	AMOUNT: $row2[amount] <br>
								 </div>
								 <br>";
								 	
						}
						echo"</div><br>";
					}
	  			}
			}
		}
	 ?>
	 
	 <form method="POST" action="make_payment.php">
	 	<div>
			<label>AMOUNT TO PAY:</label>
			<input class="form-control"  type="number" name="amount" id="amount">
		</div>

	 	<div>
	 	<label>AMOUNT PAID:</label>
		<input class="form-control" type="number" name="tender" id="tender" oninput="showDueAmount()">
	 </div>


	 <div>
				<label>CURRENT DUE AMOUNT: </label>
				<input class="form-control" type="number" name="dueAmount" id="dueAmount" readonly>
			</div>


		<input type="hidden" name="u_id" value="<?php echo $u_id; ?>">

	<input type="submit" name="update" value="update">
	 </form>
	</body>
</html>
<script type="text/javascript">
	function showDueAmount(){
			var enteredAmount= document.getElementById("tender").value;
			var amount= document.getElementById("amount").value;
			var dueAmount = amount - enteredAmount;
			if(dueAmount<0)//There is no due and the money is excess
				dueAmount=0;
			document.getElementById("dueAmount").value = dueAmount;
		}
</script>