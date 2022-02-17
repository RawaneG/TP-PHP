<?php
    include_once('../Gfunctions.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $_SESSION['message'] = '';
    $_SESSION['valeur'] = [];
    $_SESSION['entrer'] = '';
    extract($_POST);

        if(isset($solution) && isset($value) && !est_numerique($value) || $value != 0)
        {
            $_SESSION['entrer'] = $value;
            
            $valide_value = preg_replace("/\s+/"," ",$value);

            $decoupeur = explode(". ",$valide_value);

            if(isset($solution) && empty($value))
            {
                $_SESSION['message'] = "Veuillez entrer vos phrases";
                header('location:index.php');
            }
            else
            {
                foreach($decoupeur as $valeur)
                {
                    if(!preg_match("/^[A-Z0-9]/",$valeur) || !preg_match("/[.]$/",$valeur))
                    {
                        $_SESSION['message'] = "Chaque phrase commence par une majuscule et se terminer
                        par un point";
                    }
                    elseif(strlen($valeur) < 25)
                    {            
                        $_SESSION['message'] = "Chaque phrase doit contenir au moins 25 caractères";
                    }
                    else
                    {
                        $_SESSION['valeur'][] = $valeur;
                    }
                }
                header('location:index.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Veuillez entrer des valeurs alphabétiques";
                header('location:index.php');
            exit();
        }
?>
