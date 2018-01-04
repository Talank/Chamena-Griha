<?php  
	session_start();
	$title = "Chamena Griha";
	include('header.php');
	include('basic_functions.php');
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