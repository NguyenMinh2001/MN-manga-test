<?php
    include '../model/config.php';
    session_start();
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        session_destroy();
        header('location: ../public/index.php');
    }
?>