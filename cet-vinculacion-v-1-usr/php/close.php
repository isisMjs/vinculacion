<?php
header('location:../index.php');
session_start();

session_unset();

session_destroy();
