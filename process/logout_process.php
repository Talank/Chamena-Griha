<?php
    session_start();
    include('../basic_functions.php');
        session_unset();
        session_destroy();
        redirect_to("../index.php?logout=succesful");
?>