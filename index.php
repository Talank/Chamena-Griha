<?php  
	session_start();
	$title = "Chamena Griha";
	include('header.php');
?>

	<section class="container">
		<?php 
			if (isset($_SESSION['u_id'])) {
				if ($_SESSION['type'] == 0 || $_SESSION['type'] == 1 || $_SESSION['type'] == 2) 
					include('customer/customer_home.php');
				elseif ($_SESSION['type'] == 3)
					include('college/college_home.php');
				else
					include('canteen/canteen_home.php');					
			}

			else
				include('login.php');
		 ?>			
	</section>

<?php  
	include('footer.php');
?>