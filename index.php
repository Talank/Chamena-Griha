<!--***********in this part specify the things included in <head>...</head> section************ -->
<!--*****ptovide the name of title, css links, js links in appropriate variables or array****** -->
<!--*if css/js file are not needed then leave the array empty but do not destroy the variables* -->

<?php 
	$title="home";
	$css_href = array("css/login.css","css/style.css","font-awesome/css/font-awesome.min.css");
	require_once('header.php');
 ?>

 <section class="container">
	<?php 
			include('login.php');
	 ?>			
</section>

 <?php 
 	include_once('footer.php');
  ?>