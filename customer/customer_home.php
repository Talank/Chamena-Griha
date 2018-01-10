<?php 
	session_start();
	if (isset($_GET['msg'])) {
 		$msg=$_GET['msg'];		
 		if ($msg=="add_after_order") {
 			echo"<script type='text/javascript'>
					if (confirm('Can\'t add to cart after order has been placed') == true) {
						        window.location.href = 'customer_cart.php';
						    } else {
						        window.location.href = 'customer_cart.php';
						    }
				</script>";
		}
	}

	include'../process/db_conn.php';
	$u_id=$_SESSION['u_id'];
	$query="select distinct(update_date) as previous_order from cart where u_id=$u_id and status=1";
	$result=mysqli_query($conn,$query);
	if ($result) {
		$row=mysqli_fetch_array($result);
		$date=date_create($row['previous_order']);
		$todayDate=date_create(date('y-m-d',time()));
	}
	
 ?>

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
	include('customer_header.php');
?>
<section class="container">
<div class="container">
	<div class="content-wrap">
		<div class="slider">
			<figure>
				<div class="slider-image">
					<img src="../images/food/burger-wide.jpg">
					<!-- <figcaption>BURGER</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="../images/food/chowmein-wide.jpg">
					<!-- <figcaption>CHOWMEIN</figcaption> -->
				</div class="slider-image">
				<div>
					<img src="../images/food/wings-wide.jpg">
					<!-- <figcaption>CHICKEN HOT WINGS</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="../images/food/pizza-wide.jpg">
					<!-- <figcaption>PIZZA</figcaption> -->
				</div>
				<div class="slider-image">
					<img src="../images/food/fries-wide.jpg">
					<!-- <figcaption>FRENCH FRIES</figcaption> -->
				</div>
			</figure>
		</div>
    
		<div class="featured">
			<p>Featured</p>

			<?php 
				$query="select food_id,name, price, photo, type from food where featured=1";
				$result=mysqli_query($conn,$query);
				$nums=mysqli_num_rows($result);
				if($nums>0){
					while($row=mysqli_fetch_array($result)){
						echo "<div id=$row[name] class=item>
								<span>$row[name]</span>
								<img src=../images/$row[type]/$row[photo]>
								<span>Price: Rs $row[price]</span>
								<input type=number name=food_id id=food_id value=$row[food_id] style='display: none'>
								<a href=../process/add_to_cart.php?food_id=$row[food_id]>Add to cart</a>
							</div>";
					}
				}
			?>
		</div>
 	</div>
</div>
</section>
<?php 
	include('../footer.php');
 ?>