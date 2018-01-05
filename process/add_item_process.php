<?php 
	session_start();
	include_once '../basic_functions.php';

	if (isset($_POST['add_food'])){
		include_once 'db_conn.php';

		$food_name = $_POST['foodName'];
		$food_price = $_POST['foodPrice'];
		$food_desc = $_POST['foodDesc'];
		$food_pic=$_FILES["foodPic"]["name"];
		$target_dir = "../images/food/";
		$target_file = $target_dir . basename($_FILES["foodPic"]["name"]);
		$uploadOk = 1;
		$imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["foodPic"]["tmp_name"]);
	    if($check) {
	        if($check != false) {
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }

		    // Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if($imageFileType=="jpg"||$imageFileType=="jpeg")
					$imageFileType='jpeg';

				if (move_uploaded_file($_FILES["foodPic"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["foodPic"]["name"]). " has been uploaded.";



				$check_existence_query = "SELECT * FROM food WHERE name = '$food_name'";
				$result = mysqli_query($conn , $check_existence_query)
		                or die("Error : ".error_connect());
		    	$row = mysqli_fetch_array($result);
				
				if($row){
					redirect_to("../index.php?food_already_existed");
				}

				else{
					/********************INSERTING THE DATA INTO THE FOOD TABLE********************************************************************************************************************************************************/
					if (!empty($food_pic)) {
						$query = "insert into food(name,price,photo,food_desc) values('$food_name',$food_price,'$food_pic','$food_desc')";

						if (mysqli_query($conn , $query)){
							$query = "select * from food where name = '$food_name'";
							$result = mysqli_query($conn, $query);
							$row = mysqli_fetch_array($result);
				        	$food_add_id = $row['food_id'];

							$_SESSION['food_add_id']= $food_add_id;
							redirect_to("../index.php?food_added_succesfully");
						}
					}
					else
						echo'Food picture cannot be uploaded<br>
								Try uploading .png,.jpg,.gif or .bpm image';	
					}
				}
				else {
			        echo "Sorry, there was an error uploading your file.";
			    }
		    } 
		    }
	}
}
?>