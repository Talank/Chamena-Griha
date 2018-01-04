<?php 
	//Defining function for redirecting into new location
    function redirect_to($new_location){
        header("Location: ".$new_location);
        exit();
    }

    //Function to resize the image
	function resizeImage($finalWidth,$orgImgPath,$finalImgPath,$type) {
		$func_img='imagecreatefrom'.$type;//text based Function call to create a image
		$imgSave='image'.$type;//text based function call to save the image
		$img=$func_img($orgImgPath);
		list($orgWidth,$orgHeight)=getimagesize($orgImgPath);//get the original width and height
		$finalHeight=($orgHeight/$orgWidth)*$finalWidth;//Maintain the aspect ratio
		$temp=imagecreatetruecolor($finalWidth,$finalHeight);//Create new empty image
		imagecopyresampled($temp,$img,0,0,0,0,$finalWidth,$finalHeight,$orgWidth,$orgHeight);//Resample the image(decrease sample rate) to resize
		return $imgSave($temp,$finalImgPath);//return true or false based on success or failure
	}

 //  //Code to prevent unauthorized user to access the page directly by entering the specific page address in url.
 //    if (!(isset($_POST['login']) || isset($_POST['signup']) || isset($_SESSION['u_id']) || isset($_POST['forgot_password']) || isset($_GET['token']) || isset($_SESSION['email']))) {
 //      redirect_to("../index.php");
 //    }	

 //    elseif (!include 'header.php') {
 //      redirect_to("../index.php");
 //    }
 // ?>