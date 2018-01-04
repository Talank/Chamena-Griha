
<?php 
	include_once  'process/db_conn.php';

	if (isset($_SESSION['u_id'])) {
		$query = "select * from food";
		if ($result = mysqli_query($conn, $query)) {
			while($row = mysqli_fetch_array($result)){
				$food_id = $row['food_id'];
				$food_name = $row['name'];
				$food_price = $row['price'];
				$food_photo = $row['photo'];
				$food_desc = $row['food_desc'];

					echo '<div>
								<div class="foodPhoto">
									<img src="data:image/jpeg;base64,'.base64_encode($food_photo).'">
								</div>

								<div class="foodName">
									<p>
										Name : '.$food_name.'
									</p>
								</div>

								<div class="foodPrice">
									<p>
										Price : Rs. '.$food_price.'
									</p>
								</div>

								<div class="foodDesc">
									<p>
										About it : '.$food_desc.'
									</p>
								</div>
							</div>
							';
			}
		}
		else
			echo "<div>
						can't read food table
					</div>"; 
		
	}

	else{
		include_once '../basic_functions.php';
		redirect_to("../index.php?login_to_use_our_services");
	}
 ?>

<div>
	<div class="foodPhoto">
		<img src="data:image/jpeg;base64,'.base64_encode($food_photo).'">
	</div>

	<div class="foodName">
		<p>
			Name : '.$food_name.'
		</p>
	</div>

	<div class="foodPrice">
		<p>
			Price : Rs. '.$food_price.'
		</p>
	</div>

	<div class="foodDesc">
		<p>
			About it : '.$food_price.'
		</p>
	</div>
</div>
