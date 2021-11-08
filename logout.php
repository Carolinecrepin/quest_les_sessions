<?php require 'inc/head.php';

session_unset();
// destroy the session
session_destroy();
header('Location: index.php');
exit();
