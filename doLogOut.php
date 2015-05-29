<?php
session_start();

include 'db.php';

$_SESSION["login"] = 0;
session_destroy();
    header('Location:login.php');
    