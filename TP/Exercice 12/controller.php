<?php
    include_once('../Gfunctions.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $_SESSION['valeur1'] = '';
    $_SESSION['valeur2'] = '';
    extract($_POST);

    if(isset($solution))
    {
        if(isset($select) && $select == "Ang")
        {
            $_SESSION['valeur1'] = $select;
            header('location:index.php');
            exit();
        }
        if(isset($select) && $select == "Franc")
        {
            $_SESSION['valeur2'] = $select;
            header('location:index.php');
            exit();
        }
    }
?>
