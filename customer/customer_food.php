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
	<!-- <script type="text/javascript" src="../js/add_to_cart.js"></script> -->
</head>
<body>
	<?php 
	session_start();
	include('customer_header.php'); ?>
<div class="container">
	<div class="content-wrap">

		<div id="food" >
			<h1>FOOD MENU</h1>

			<div class="food-menu">
				<?php 
					include '../process/db_conn.php';
					$query="select food_id,name, price, photo from food";
					$result=mysqli_query($conn,$query);
					$nums=mysqli_num_rows($result);
					if($nums>0){
						while($row=mysqli_fetch_array($result)){
							echo"<div class=food-item>
									<div class=row1>
										<img src=../images/food/$row[photo]>
									</div>
									<div class=row2>
										<h2>$row[name]</h2>
										<span>Rs. $row[price]</span>
										<input type=number name=food_id id=food_id value=$row[food_id] style='display: none'>
										<a href=../process/add_to_cart.php?food_id=$row[food_id]>Add to cart</a>
									</div>
								</div>";
						}
					}
				?>
			</div>
		</div> 
	</div>
</div>
<!--</div>-->
<?php 
	include('../footer.php');
 ?>