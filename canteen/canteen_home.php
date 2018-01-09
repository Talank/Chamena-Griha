<?php 
	if (isset($_GET['msg'])) {
 		$msg=$_GET['msg'];		
 		if ($msg=="food_already_existed") {
 			echo"<script type='text/javascript'>
					if (confirm('The food already exists') == true) {
						        window.location.href = 'canteen_home.php';
						    } else {
						        window.location.href = 'canteen_home.php';
						    }
				</script>";
		}
		if ($msg=="food_added_succesfully") {
 			echo"<script type='text/javascript'>
					if (confirm('1 food item has been added') == true) {
						        window.location.href = 'canteen_home.php';
						    } else {
						        window.location.href = 'canteen_home.php';
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
</head>
<body>

<?php
	session_start();
	include('canteen_header.php');
?>

<style type="text/css">
		.container {
			min-height: 520px;
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

		 <?php 
		 	include('../process/db_conn.php');
		 	$query = "select sum(status) as value from cart";
		 	$result = mysqli_query($conn, $query);
		 	$row= mysqli_fetch_array($result);
		 	if($row['value']>0){
		 		$query2= "select distinct food_id from cart where status like 1";
		 		$result2 = mysqli_query($conn, $query2);
		 		$nums= mysqli_num_rows($result2);
		 		if ($nums>0) {	
		 			while($row2=mysqli_fetch_array($result2)){		 				
		 				$food_id=$row2['food_id'];
		 				$query3="select sum(quantity) as qty from cart where food_id=$food_id";
		 				$result3 = mysqli_query($conn, $query3);
		 				$row3= mysqli_fetch_array($result3);
		 				
						$query4="select name,photo from food where food_id=$food_id";
						$result4 = mysqli_query($conn, $query4);
		 				$row4= mysqli_fetch_array($result4);

		 				echo"<div class=ordered-item>
								<div class=row>
									<img src=../images/food/$row4[photo]>
								</div>
								<div class=row2>
									<h2>$row4[name]</h2>
									<span>Qty : $row3[qty]</span>
								</div>
							</div>";
		 			}
		 		}
			}
		 	else
		 		echo"<div class=no-order>
		  				<img src=../images/sad_emo.png>
		  				<h1>Sorry!!! There are no orders for today.</h1>
		 			 </div>"

		 		
		?> 

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