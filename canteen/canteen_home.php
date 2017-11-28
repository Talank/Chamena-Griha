<?php
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
	        <form name="addItem" action="../Canteen/process/add_item_process.php" method="post" enctype="multipart/form-data">
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