<?php
include_once('../Gfunctions.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_SESSION['message'] = '';
$_SESSION['valeur'] = '';
extract($_POST);
valide($number);
?>