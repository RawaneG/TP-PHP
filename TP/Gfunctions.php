<?php 
    session_start();

    // Pour vérifier si un nombre est numérique ou pas

    function est_numerique($nombre)
    {
        return is_numeric($nombre);
    }

    // Pour vérifier si un nombre est entier ou pas

    function est_entier($nombre)
    {
        return is_integer($nombre);
    }

    // Pour obtenir la table de multiplication de n'importe quel nombre

    function multiplication($N)
    {
        $multiplication = 0;
        for($i = 0; $i <= 12; $i++)
        {
            $multiplication = $N * $i;
            echo $N." x ".$i." = ". $multiplication;
            echo "<br>";
        }
    }

    // Pour vérifier si un nombre est premier ou pas

    function est_premier($nombre)
    {
        $count = 1;
        for($i = 1; $i < $nombre; $i++)
        {
            if($nombre % $i == 0)
            {
                $count = $count + 1;
            }
        }
        if($count == 2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }   

    // Pour calculer la moyenne

    function moyenne($nombre)
    {
        $somme = 0;
        for($i = 1; $i <= $nombre; $i++)
        {
            $somme = $somme + $i;
        }
        $moyenne = $somme/$nombre;
        return $moyenne;
    }
    
    // Pour si les données entrées dans un champ sont valides ou pas

    function valide($input)
    {
        if(isset($_POST['solution']) && isset($input) && est_numerique($input) || $input == 0)
        {
            $_SESSION['valeur'] = $input;
            if($_SESSION['valeur'] < 0)
            {
                $_SESSION['message'] = "Veuillez entrer une valeur positive";
                header('location:index.php');
                exit();
            }
            else
            {
                header('location:index.php');
                exit();
            }
        }
        elseif(isset($_POST['solution']) && empty($input))
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
    }
?>
