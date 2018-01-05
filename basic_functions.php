<?php 
	//Defining function for redirecting into new location
    function redirect_to($new_location){
        header("Location: ".$new_location);
        exit();
    }

 //  //Code to prevent unauthorized user to access the page directly by entering the specific page address in url.
 //    if (!(isset($_POST['login']) || isset($_POST['signup']) || isset($_SESSION['u_id']) || isset($_POST['forgot_password']) || isset($_GET['token']) || isset($_SESSION['email']))) {
 //      redirect_to("../index.php");
 //    }	

 //    elseif (!include 'header.php') {
 //      redirect_to("../index.php");
 //    }
 // ?>