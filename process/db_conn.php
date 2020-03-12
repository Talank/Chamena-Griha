<?php
	$db_name = "casdb";
	$host = "localhost";
	$username = "root";
	$password = getenv("MYSQL_PASSWORD") ? getenv("MYSQL_PASSWORD") : "root";

	$conn = new mysqli($host, $username, $password , $db_name);
	//$conn = mysqli_connect($host, $username, $password , $db_name);
 ?>