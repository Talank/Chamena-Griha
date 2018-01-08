<?php 
	session_start();
	include'../basic_functions.php';
	include'db_conn.php';

	if (isset($_GET['order'])) {
		date_default_timezone_set('Asia/Kathmandu');
		$date=date("Y/m/d");
		$time=date("h:i:s");
		$clock=date("a");

       	list($time1_hour, $time1_min) = explode(":", $time);

		if (($time1_hour <="08" && $clock=="am")||$clock=="pm") {
			$total_price=0;
			$u_id=$_SESSION['u_id'];
			$query="select * from cart where u_id=$u_id";
			$result = mysqli_query($conn, $query);		
			$nums=mysqli_num_rows($result);
			if($nums>0){
				while($row=mysqli_fetch_array($result)){
					$food_id=$row['food_id'];
					$query2="select item_id,quantity,status from cart where u_id=$u_id and food_id=$food_id";
					$result2=mysqli_query($conn,$query2);
					$row2=mysqli_fetch_array($result2);

					$query5="select price from food where food_id=$food_id";
					$result5=mysqli_query($conn,$query5);
					$row5=mysqli_fetch_array($result5);

					$total_price = $total_price+($row5['price']*$row2['quantity']);
					$item_id=$row2['item_id'];
					$status=$row2['status'];
					if($status==0)
						$status=1;
					$query3="update cart set status=$status where item_id=$item_id update_date='$date', update_time='$time', clock='$clock'";
					$result3=mysqli_query($conn,$query3);
				}
				
				//updating the account of that user
				$query4="update `account` set amount=amount+$total_price where u_id=$u_id";
				$result4 = mysqli_query($conn, $query4);
				if ($result4) {
					redirect_to("../customer/customer_cart.php?order_success=$total_price");
				}			
			}
		}
		else{
			redirect_to("../customer/customer_cart.php?msg=add_not_success_time");
		}
	} 	
 ?>