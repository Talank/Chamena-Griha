<!DOCTYPE html>
<html>
<head>
	<!--****************php code for including page title provided in $title****************** -->
	<title>
		<?php echo "$title"; ?>
	</title>
	
	<link rel="icon" href="images/favicon.ico">
	
	<!--**************php code for including css links provided in array $css_href**************** -->
	<?php
		$num_of_css_href_links = count($css_href);
		for($x = 0; $x < $num_of_css_href_links; $x++) {
		    echo "<link rel='stylesheet' type='text/css' href='$css_href[$x]'>";
		}
	?>
</head>
<body>