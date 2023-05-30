<?php
    session_start();
    if($_SESSION['auth'] == true) {
        unset($_SESSION['auth']);
        header('Location:login.php');
    }
    
