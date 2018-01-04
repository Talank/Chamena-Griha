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

<section class="container">
	<div class="content-wrap">

	<?php
		if (isset($_SESSION['food_add_id'])) {
			echo '<script type="text/javascript">
						window.alert("1 food item has been added");
					</script>';

			unset($_SESSION['food_add_id']);
		}
	 ?>

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