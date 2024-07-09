<?php
    session_start();
    session_destroy();
    header('location:./Func/signin.php')
?>