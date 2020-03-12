<?php
    include_once('../../process/db_conn.php');

    //Clean the cart after add to cart and order
    $query = "delete from cart";
    $result = mysqli_query($conn, $query);

    //order sets cart status to 1 but also adds up to students account
    //So, clean up the account table
    //For this we need to set account to 0 for all row

    $account_query = "update `account` set amount=0";
    $account_result = mysqli_query($conn, $account_query);
?>
