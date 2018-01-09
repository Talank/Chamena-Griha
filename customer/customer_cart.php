<?php 
 	if (isset($_GET['msg'])) {
 		$msg=$_GET['msg'];
 		
 		if ($msg=="add_not_success_time") {
 			echo"<script type='text/javascript'>
					if (confirm('Can\'t order between 9AM-12PM') == true) {
						        window.location.href = '../index.php';
						    } else {
						        window.location.href = '../index.php';
						    }
				</script>";
		}
		if ($msg=="remove_after_order") {
 			echo"<script type='text/javascript'>
					if (confirm('Can\'t remove after order') == true) {
						        window.location.href = '../index.php';
						    } else {
						        window.location.href = '../index.php';
						    }
				</script>";
 		}
 		if ($msg=="remove_not_success") {
 			echo"<script type='text/javascript'>
					if (confirm('sorry! there is a problem on removing item') == true) {
						        window.location.href = '../index.php';
						    } else {
						        window.location.href = '../index.php';
						    }
				</script>";
 		}
 		
 		if ($msg=="serve_success") {
 			echo"<script type='text/javascript'>
					if (confirm('Your serve request has been sent') == true) {
						        window.location.href = '../index.php';
						    } else {
						        window.location.href = '../index.php';
						    }
				</script>";
		}
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

	<script type=text/javascript>
			function showPop(){
		 		
			   }
		 	</script>
</head>
<body>
	<?php 
	session_start();
	include('customer_header.php'); 
	include '../basic_functions.php';
	?>
<div class="container">
	<div class="content-wrap">

		<div id="cart">
			<h1>
				<?php 
						include '../process/db_conn.php';
						$u_id=$_SESSION['u_id'];

						$query0="select count(food_id) as value from cart where u_id=$u_id";
						$result0 = mysqli_query($conn, $query0);
						$row0=mysqli_fetch_array($result0);
						if ($row0['value']>0)
							echo "ITEMS ADDED TO CART";
						else
							echo "YOUR CART IS EMPTY";
				 ?>
			</h1>
			<div class="cart-box">
				<div class="items-added">

					<?php 
						$total_price=0;
						$query="select food_id,name, price, photo from food where food_id in (select food_id from cart where u_id=$u_id)";
						$result=mysqli_query($conn,$query);
						if ($result) {
							$nums=mysqli_num_rows($result);
							if($nums>0){
								while($row=mysqli_fetch_array($result)){
									$food_id=$row['food_id'];
									$query2="select quantity,status from cart where u_id=$u_id and food_id=$food_id";
									$result2=mysqli_query($conn,$query2);
									$row2=mysqli_fetch_array($result2);

									$total_price += ($row['price']*$row2['quantity']);
									echo"<div class=cart-item>
											<img src=../images/food/$row[photo]>
											<h2>$row[name]</h2>
											<span>Rs: $row[price] * $row2[quantity]</span>
											<input type=number name=food_id id=food_id value=$row[food_id] style='display: none'>
											<a href=../process/remove_from_cart.php?food_id=$row[food_id]>Remove</a>
										</div>";
								}
							}	
						}
					 ?>
				</div>
				
				<div class="total order serve">
					<h2>Total: Rs <?php echo "$total_price"; ?></h2>

					<?php 
						$query="select * from cart where u_id=$u_id";
						$result = mysqli_query($conn, $query);		
						$nums=mysqli_num_rows($result);
						if($nums>0){
							$status=0;
							while ($row=mysqli_fetch_array($result)) {
								$status += $row['status'];
							}
							if ($status==0) {
								echo "<form action=../process/order_process.php method=GET>
										<input type=submit name=order value=Order id=order_btn>
									</form>";
							}
							else
								echo "<form action=../process/serve_process.php method=GET>
										<input type=submit name=serve value=Serve id=serve_btn>
									</form>";
						}
				 	?>
				 	
				</div>	
			</div>
		</div>
	</div>
</div>

<?php 
	include('../footer.php');
 ?>