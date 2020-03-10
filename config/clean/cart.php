<?php
    include_once('../../process/db_conn.php');
    $query = "select * from cart";
    $result = mysqli_query($conn, $query);
?>
