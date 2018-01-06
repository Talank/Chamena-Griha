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
	include('customer_header.php'); ?>
<div class="container">
	<div class="content-wrap">

		<div id="cart">
			<h1>ITEMS ADDED TO CART</h1>
			<div class="cart-box">
				<div class="items-added">

					<?php 
						include '../process/db_conn.php';
						$u_id=$_SESSION['u_id'];
						$total_price=0;
						$query="select food_id,name, price, photo from food where food_id in (select food_id from cart where u_id=$u_id)";
						$result=mysqli_query($conn,$query);
						if ($result) {
							$nums=mysqli_num_rows($result);
							if($nums>0){
								while($row=mysqli_fetch_array($result)){
									$total_price += $row['price'];
									echo"<div class=cart-item>
											<img src=../images/food/$row[photo]>
											<h2>$row[name]</h2>
											<span>Rs: $row[price]</span>
											<input type=number name=food_id id=food_id value=$row[food_id] style='display: none'>
											<a href=../process/remove_from_cart.php?food_id=$row[food_id]>Remove</a>
										</div>";
								}
							}	
						}
					 ?>
				</div>

				<script type="text/javascript">
					//document.getElementById("serve_btn").style.display = none;
					//startOrder();
					function startOrder(x){
						if (x.value=="Order") {
							//document.getElementById("serve_btn").style.display = block;
							document.getElementById('order_btn').style.visibility = 'hidden';
							document.getElementById('serve_btn').style.visibility = 'visible';
						}
						// if (x.value=="Serve") {
						// 	//document.getElementById("serve_btn").style.display.display = solid;
						// }
					}
				</script>

				<div class="total order serve">
					<h2>Total: Rs <?php echo "$total_price"; ?></h2>
					<!-- <form action="../process/order_process.php"> -->
						<input type="submit" name="serve" value="Serve" id="serve_btn" onclick="startOrder(this)">
						<input type="submit" name="order" value="Order" id="order_btn" onclick="startOrder(this)">
					<!-- </form> -->
					<!-- <form action="../process/order_process.php"> -->
					<!-- </form> -->
				</div>	
				
			</div>
		</div>
	</div>
</div>

<?php 
	include('../footer.php');
 ?>