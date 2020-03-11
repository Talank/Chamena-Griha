<?php
    include_once('../../process/db_conn.php');
    $query = "delete from cart";
    $result = mysqli_query($conn, $query);
?>
