<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
	<link rel="stylesheet" type="text/css" href="../css/customer_home.css">
	<link rel="stylesheet" type="text/css" href="../css/canteen_home.css">
	<link rel="stylesheet" type="text/css" href="../css/clz_admin_home.css">
	<script type="text/javascript" src="../js/global.js"></script>
</head>
<body>

<?php
	session_start();
	include('canteen_header.php');
?>

<style type="text/css">
		.container {
			min-height: 500px;
		}
</style>

<section class="container">
	<div class="content-wrap">

		<!-- <?php
			//  if (isset($_SESSION['food_add_id'])) {
			//  	echo '<script type="text/javascript">
			//  				window.alert("1 food item has been added");
			//  			</script>';

			//  	unset($_SESSION['food_add_id']);
			// }
		 ?> -->
		 <!-- <?php 
	// 	 	include('../process/db_conn.php');
	// 	 	$query = "select sum(status) as value, from cart";
	// 	 	$result = mysqli_query($conn, $query);
	// 	 	$row= mysqli_fetch_array($result); 
	// 	 	if($row['value']>0){
	// 	 		echo"<div class=food-item>
	// 					<div class=row1>
	// 						<img src=../images/food/$row[photo]>
	// 					</div>
	// 					<div class=row2>
	// 						<h2>$row[name]</h2>
	// 						<span>Rs. $row[price]</span>
	// 						<input type=number name=food_id id=food_id value=$row[food_id] style='display: none'>
	// 						<a href=../process/add_to_cart.php?food_id=$row[food_id]>Add to cart</a>
	// 					</div>
	// 				</div>";
	// }
	// 	 	else
	// 	 		echo"<img style=width: 200px; src=../images/sad_emo.png>
	// 	 			<p>There are no orders today.</p>"
		 		
		  ?> -->

		  <!-- DISPLAY THIS WHEN THERE ARE NO ORDERS FOR FOOD -->

		  <div class="no-order">
		  	<img src=../images/sad_emo.png>
		  	<h1>Sorry!!! There are no orders for today.</h1>
		  </div>

		  <!-- DISPLAY THIS WHEN THERE ARE ORDERS FOR FOOD -->
		<!-- <h1 style="font-size: 40px; text-align: center; margin-top: 0">Today's Order</h1>
		<div class=ordered-item>
			<div class=row1>
				<img src=../images/food/fries.jpg>
			</div>
			<div class=row2>
				<h2>Fries</h2>
				<span>Qty : 5</span>
			</div>
		</div>
		<div class=ordered-item>
			<div class=row1>
				<img src=../images/food/fries.jpg>
			</div>
			<div class=row2>
				<h2>Fries</h2>
				<span>Qty : 5</span>
			</div>
		</div>
		<div class=ordered-item>
			<div class=row1>
				<img src=../images/food/fries.jpg>
			</div>
			<div class=row2>
				<h2>Fries</h2>
				<span>Qty : 5</span>
			</div>
		</div>
		<div class=ordered-item>
			<div class=row1>
				<img src=../images/food/fries.jpg>
			</div>
			<div class=row2>
				<h2>Fries</h2>
				<span>Qty : 5</span>
			</div>
		</div> -->

		<!-- The Form -->
		<div id="theForm" class="form">

		  <!-- Modal content -->
		  <div class="form-content">
		    <!--<span class="close">-->
		        <form name="addItem" action="../process/add_item_process.php" method="post" enctype="multipart/form-data">
					<input type="text" name="foodName" placeholder="Food Name">
					<input type="number" name="foodPrice" placeholder="Food Price">
					Upload this food's picture: <input type="file" name="foodPic">
					<textarea name="foodDesc" rows="4" cols="30" placeholder="Description of Food"></textarea>
					<input type="submit" name="add_food" value="Add it">
				</form>
		    <!-- </span> -->
		  </div>

		</div>
	</div>
</section>
<?php 
	include('../footer.php');
 ?>