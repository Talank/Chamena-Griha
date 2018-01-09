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
	include('college_header.php');
?>
 
<section class="container">
	<div class="content-wrap">
		<div class="clz">
			<img src="../images/admin.png">
			<label class="clz-search-box">	
				<input type="text" name="search" placeholder="Search" class="clz-search">

				<button style=" background-color: #e9f9e8; box-shadow: 0px; border-color: #ff713f; border-style: none;">
					<i class="fa fa-search" aria-hidden="true" style="color: #b0b4ba;"></i>
				</button>		

			</label>
			<div id="id1"></div>
		</div>
	</div>
	<style type="text/css">
		.container {
			min-height: 520px;
		}
	</style>
 </section>
 <script type="text/javascript" src="../js/search_user.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <?php 
	include('../footer.php');
 ?>