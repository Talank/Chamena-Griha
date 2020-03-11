<?php
include_once('../../process/db_conn.php');
$query = "select * from cart where u_id=$u_id";
$result = mysqli_query($conn, $query);
?>
