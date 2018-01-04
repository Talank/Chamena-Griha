<?php 
	if (isset($_POST['name'])) {
		$name=$_POST['name'];
		include '../process/db_conn.php';
		$stmt="select name, photo from food where name='$name'";
		$result=mysqli_query($conn,$stmt);
		$nums=mysqli_num_rows($result);
		if($nums>0){
			while($row=mysqli_fetch_array($result)){
				echo"<img src=../Images/$row[photo] id=img1><br>";
				echo"<b>$row[name]<br>";
			}
		}
	}
 ?>
 <div class="search-item">
			<div>
				<img src="../images/food/momo.jpg">
			</div>
			<div>
				<h2>Chicken Momo</h2>
				<span>Rs 120</span>
				<a href="#">Add to cart</a>
			</div>
		</div>