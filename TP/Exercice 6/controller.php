<?php 
    require 'fonctions.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $a = $b = $c = '';
    $aErr = $bErr = $cErr = '';
    extract($_POST);
    if(isset($a) && isset($b) && isset($c) && isset($solution) &&
    ($a == 0 || est_numerique($a)) && ($b == 0 || est_numerique($b)) && ($c == 0 || est_numerique($c)))
    {
        echo equation($a,$b,$c);
    }
    else
    {
        $aErr = (($a == 0 || est_numerique($a)) && isset($a)) ? '' : 'Veuillez entrer une valeur';
        $bErr = (($b == 0 || est_numerique($b)) && isset($b)) ? '' : 'Veuillez entrer une valeur'; 
        $cErr = (($c == 0 || est_numerique($c)) && isset($c)) ? '' : 'Veuillez entrer une valeur';
    }
?> 
