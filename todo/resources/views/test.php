<?php

    session_start();
    if(!isset($_SESSION['login']) && $_SESSION['login'] != '') {
        header("Location: login.php");
        return;
    }

    include_once('login_check.php')
?>