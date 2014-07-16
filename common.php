<?php
   //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    session_start();
    require_once'inc/template.php';
    if($_POST['logout'] == 'logout')
    {
        session_destroy();
        header('Location:?');
    }
    else if($_POST['password'] == 'bruins')
    {
        $_SESSION['t'] = true;
    }
    