<?php
    session_start();

    // kiem ta session co ton tai hay khong

    if(isset($_SESSION['mySession'])){
       unset($_SESSION['mySession']) ;
    }

    // xoa xg chuyen ve tran login
    header("location: login.php");
    exit();
?>