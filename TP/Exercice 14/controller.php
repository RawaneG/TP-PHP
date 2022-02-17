<?php
    include_once('../Gfunctions.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $_SESSION['message'] = '';
    $_SESSION['valeurV'] = [];
    $_SESSION['valeurI'] = [];
    $_SESSION['valeur'] = '';

    $cOrange = $cTigo = $cExpresso = $cProMobile = 0;
    $_SESSION['cOrange'] = $_SESSION['cTigo'] = $_SESSION['cExpresso'] = $_SESSION['cProMobile'] = 0;
    
    extract($_POST);
    
    if(isset($solution) && isset($value) && !is_float($value) || $value == 0)
    {
        $_SESSION['valeur'] = $value;
        $decoupeur = explode(" ", $value);
        if($value < 0)
        {
            $_SESSION['message'] = "Veuillez entrer une valeur positive";
            header('location:index.php');
            exit();
        }
        else
        {
            foreach($decoupeur as $valeur)
            {
                if(strlen($valeur) == 9)
                {
                    if(preg_match("#^[7][7][0-9]{7}#",$valeur))
                    {
                        $_SESSION['valeurV'][] = $valeur;
                        $cOrange = $cOrange + 1;
                        $_SESSION['cOrange'] = $cOrange;
                    }
                    elseif(preg_match("#^[7][8][0-9]{7}#",$valeur))
                    {
                        $_SESSION['valeurV'][] = $valeur;
                        $cOrange = $cOrange + 1;
                        $_SESSION['cOrange'] = $cOrange;
                    }
                    elseif(preg_match("#^[7][6][0-9]{7}#",$valeur))
                    {
                        $_SESSION['valeurV'][] = $valeur;
                        $cTigo = $cTigo + 1;
                        $_SESSION['cTigo'] = $cTigo;
                    }
                    elseif(preg_match("#^[7][0][0-9]{7}#",$valeur))
                    {
                        $_SESSION['valeurV'][] = $valeur;
                        $cExpresso = $cExpresso + 1;
                        $_SESSION['cExpresso'] = $cExpresso;
                    }
                    elseif(preg_match("#^[7][5][0-9]{7}#",$valeur))
                    {
                        $_SESSION['valeurV'][] = $valeur;
                        $cProMobile = $cProMobile + 1;
                        $_SESSION['cProMobile'] = $cProMobile;
                    }
                    else
                    {
                        $_SESSION['valeurI'][] = $valeur;
                    }
                }
                else
                {
                    $_SESSION['valeurI'][] = $valeur;
                }
            }
            header('location:index.php');
        }
    }
    elseif(isset($solution) && empty($value))
    {
        $_SESSION['message'] = "Veuillez entrer une valeur";
        header('location:index.php');
        exit();
    }
    else
    {
        $_SESSION['message'] = "Veuillez entrer une valeur numérique";
        header('location:index.php');
        exit();
    }

?>
