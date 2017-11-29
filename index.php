<?php 
	session_start();
	include_once('process/basic_functions.php');
 ?>

<!--***********in this part specify the things included in <head>...</head> section************ -->
<!--*****ptovide the name of title, css links, js links in appropriate variables or array****** -->
<!--*if css/js file are not needed then leave the array empty but do not destroy the variables* -->

<?php 
	$title="chamena griha";
	$css_href = array("css/login.css","css/style.css","font-awesome/css/font-awesome.min.css");
	include('header.php');
 ?>

 <section class="container">
	<?php 
		if (isset($_SESSION['u_id'])) {
			if ($_SESSION['type'] == 0 || $_SESSION['type'] == 1 || $_SESSION['type'] == 2) 
				redirect_to('customer/customer_home.php');
			elseif ($_SESSION['type'] == 3)
				redirect_to('college/college_home.php');
			else
				redirect_to('canteen/canteen_home.php');					
		}

		else
			include('login.php');
	 ?>			
</section>

 <?php 
 	include('footer.php');
  ?>