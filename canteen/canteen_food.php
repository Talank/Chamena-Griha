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
	<script type="text/javascript">
		function showForm(){
			
			document.getElementById("theForm").style.display='block';
		}
	</script>
</head>
<body>
	<?php 
	session_start();
	include('canteen_header.php'); ?>
<div class="container">
	<div class="content-wrap">

		<div id="theForm" class="form">

		  <!-- Modal content -->
		  <div class="form-content">
		    <!--<span class="close">-->
		        <form name="addItem" action="../process/add_item_process.php" method="post" enctype="multipart/form-data">
					<input type="text" name="foodName" placeholder="Food Name"><br>
					<input type="number" name="foodPrice" placeholder="Food Price"><br>
					Upload this food's picture: <input type="file" name="foodPic"><br>
					<label><input type="radio" name="type" value="food">Food<br></label>
					<label><input type="radio" name="type" value="beverage">Beverage<br></label>
					<input type="submit" name="add_food" value="Add it"><br>
				</form>
		    <!-- </span> -->
		  </div>

		</div>

		<div id="food" >
			<h1 style="display: inline-block;">FOOD ITEM LIST</h1>
			<button class="add-item-btn" onclick="showForm();">Add Item</button>

			<div class="food-menu">
				<?php 
					include '../process/db_conn.php';
					$query="select food_id,name, price, photo from food where type='food'";
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
										<a href=../process/delete_file.php?food_id=$row[food_id]&&type=food&&name=$row[name]>Delete Item</a>
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
