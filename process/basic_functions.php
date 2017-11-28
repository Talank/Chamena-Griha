<?php 
	//Defining function for redirecting into new location
    function redirect_to($new_location){
        header("Location: ".$new_location);
        exit();
    }
 ?>