<?php 
    session_start();
    
    if (isset($_SESSION['usr_log'])) {
        header('location:cet-vinculacion-v-1-usr/index.php');
    } else if (isset($_SESSION['adm_log'])) {
        header('location:cet-vnculacion-v-1-adm/index.php');
    } else {
        header('location:cet-vinculacion-v-1-usr/pages/login.php');
    }
?>