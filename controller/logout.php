<?php
    header("Location: ../index.php");
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['user']);
    session_destroy();

?>
