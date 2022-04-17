<?php
session_start();

if (empty($_SESSION['name'])) {
    header('Location: /login.php');
    die('Please log in first');
}

session_destroy();
header('Location: /');
