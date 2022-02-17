<?php 
    $nombre1 = rand(0 , 10);
    $nombre2 = rand(0,5);

    echo "nombre1 : ". $nombre1;
    echo "<br>";

    echo "nombre2 : ". $nombre2;
    echo "<br>";

    function somme($nombre1,$nombre2)
    {
        return $nombre1 + $nombre2;
    }

    echo "La somme : ". somme($nombre1 , $nombre2);
    echo "<br>";

    function expo($nombre1,$nombre2)
    {
        $nombre1 = exp($nombre2);
        return $nombre1;
    }

    echo "L'exponentiel du nombre 1 est : ". expo($nombre1,$nombre2);
    echo "<br>";

    function expo1($nombre1,$nombre2)
    {
        $nombre2 = exp($nombre1);
        return $nombre2;
    }
    echo "L'exponentiel du nombre 2 est : ". expo1($nombre1,$nombre2);
    echo "<br>";

    function difference($nombre1,$nombre2)
    {
        if($nombre1 < $nombre2)
        {
            $difference = $nombre2 - $nombre1;
            return $difference;
        }
        else
        {
            $difference = $nombre1 - $nombre2;
            return $difference;
        }
    }

    echo "La différence : ". difference($nombre1,$nombre2);
    echo "<br>";

    function produit($nombre1,$nombre2)
    {
        return $nombre1 * $nombre2;
    }

    echo "Le Produit est : ". produit($nombre1,$nombre2);
    echo "<br>";

    function modulo1($nombre1,$nombre2)
    {
        if($nombre2 == 0)
        {
            $message = "Impossible";
            return $message;
        }
        else
        {
            return $nombre1 % $nombre2;
        }
    }

    echo "Le modulo du nombre1 est : ". modulo1($nombre1,$nombre2);
    echo "<br>";

    function modulo2($nombre1,$nombre2)
    {
        if($nombre1 == 0)
        {
            $message = "Impossible";
            return $message;
        }
        else
        {
            return $nombre2 % $nombre1;
        }
    }
    
    echo "Le modulo du nombre 2 est : ". modulo2($nombre1,$nombre2);
    echo "<br>";

    function carre1($nombre1)
    {
        return $nombre1*$nombre1;
    }

    echo "Le carré du nombre 1: ". carre1($nombre1);
    echo "<br>";

    function carre2($nombre2)
    {
        return $nombre2*$nombre2;
    }

    echo "Le carré du nombre 2: ". carre2($nombre2);
    echo "<br>";

    function division($nombre1,$nombre2)
    {
        if($nombre2 == 0)
        {
            $message = "La division est impossible";
            return $message;
        }
        else
        {
            return $nombre1/$nombre2;
        }
    }

    echo "La division est : ". division($nombre1,$nombre2);
    echo "<br>";


?>