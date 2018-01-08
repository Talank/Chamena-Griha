<?php 
	session_start();
	include_once('db_conn.php');
	include_once('../basic_functions.php');
	if(isset($_GET['food_id'])){
		$food_id=$_GET['food_id'];
		$u_id= $_SESSION['u_id'];

		date_default_timezone_set('Asia/Kathmandu');
		$date=date("Y/m/d");
		$time=date("h:i:s");
		$clock=date("a");

       	//list($time1_hour, $time1_min) = explode(":", $time);

		//if (($time1_hour <="08" && $clock=="pm")) {
			$query="select * from cart where u_id=$u_id and food_id=$food_id";
			$result = mysqli_query($conn, $query);		
			$nums=mysqli_num_rows($result);
			if($nums>0){
				$row=mysqli_fetch_array($result);
				$item_id=$row['item_id'];
				$query="update cart set quantity=quantity+1, update_date='$date', update_time='$time', clock='$clock' where item_id=$item_id";
				$result = mysqli_query($conn, $query);
				if ($result) {
					redirect_to("../customer/customer_food.php?item_added_u_id=$u_id");	
				}
				else
					redirect_to("../customer/customer_food.php?add_not_success1");
			}
			else{
				$query="insert into cart (u_id,food_id,quantity,status,update_date,update_time,clock) values($u_id,$food_id,1,0,'$date','$time','$clock')"; 
				//status 0 for Order and 1 for serve
				
				$result = mysqli_query($conn, $query);
				if ($result) {
					//redirect_to("../customer/customer_food.php?item_added_u_id=$u_id&&food_id=$food_id");	
					echo "<script type='text/javascript'>
							window.history.back();
						</script>";
				}
				else
					redirect_to("../customer/customer_food.php?add_not_success2");
			}	
		// }
		// else{
		// 	redirect_to("../customer/customer_food.php?msg=add_not_success_time");
		// }
	}
?>