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

<style type="text/css">
		.container {
			min-height: 520px;
		}
</style>

<body>

<?php
	session_start();
	include('canteen_header.php');
?>

<section class="container">
			<div class="content-wrap">
				<?php 
					include'../process/db_conn.php';
					$query= "select distinct u_id from cart where status=2";
					$result= mysqli_query($conn, $query);
					if ($result) {
						$nums=mysqli_num_rows($result);
						if ($nums<=0) {
							echo "<div class=no-notification>
						  			<img src=../images/no-notification.png>
						  			<h1>No Notifications</h1>
						  		</div>";
						}
						else
							$query= "select distinct(u_id),update_time, clock from cart where status=2";
						$result= mysqli_query($conn, $query);
						if ($result) {
							$nums=mysqli_num_rows($result);
							if($nums>0){
							
								while($row=mysqli_fetch_array($result)){
									$u_id=$row['u_id'];
									
							 		$query2="(select first_name, last_name, photo from student where u_id=$u_id) union (select first_name, last_name, photo from teacher where u_id=$u_id) union (select first_name, last_name, photo from other where u_id=$u_id)";
									$result2= mysqli_query($conn, $query2);
									$row2=mysqli_fetch_array($result2);

									echo " <div id=user_pic>
											 	<img src=../images/users/$row2[photo] alt=$row2[first_name] height= 150px;>
											 </div>
											 <div id=user_name>
											 	<p>$row2[first_name] $row2[last_name]</p>
											 </div>
											 <div id=request_time>
											 	<p>$row[update_time] $row[clock]</p>
											 </div>";

									$query3= "select food_id,quantity from cart where u_id=$u_id";
									$result3= mysqli_query($conn, $query3);
									while($row3=mysqli_fetch_array($result3)){
										$food_id=$row3['food_id'];
										$query4= "select name from food where food_id=$food_id";
										$result4= mysqli_query($conn, $query4);
										$row4= mysqli_fetch_array($result4);

										echo "<div id=food_list>
											 	<p>$row4[name] * $row3[quantity]</p>
											 </div>";
									}
									echo "<a href=../process/serve.php?u_id=$u_id>Mark Served</a>";
									echo "<hr>";
								}
							}
						}
					}
				 ?> 
		</div>
	</div>
</section>
<?php 
	include('../footer.php');
 ?>
 