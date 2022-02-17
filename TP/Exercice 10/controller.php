<?php
    include_once('../Gfunctions.php');
    $_SESSION['valeur'] = '';
    $_SESSION['message'] = '';
    extract($_POST);
    valide($number);
?>