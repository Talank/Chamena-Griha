<?php 
	if (isset($_GET['food_id']) && isset($_GET['type']) $$ isset($_GET['name'])) {
		$filename=$_GET['name'];
		$type=$_GET['type'];
		$food_id=$_GET['food_id'];
		$target_dir = "../images/$type/";
		$target_file = $target_dir . basename($food_pic);
		if (file_exists($target_file)) {
		    unlink($target_file);
		    $query="delete from `food` where food_id=$food_id";
			$result = mysqli_query($conn, $query);
			if ($result) {
		    echo 'File '.$filename.' has been deleted';}
		  } else {
		    echo 'Could not delete '.$filename.', file does not exist';
		  }
			}
 ?>