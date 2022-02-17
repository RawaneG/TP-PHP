<?php
    $longueur = rand(0 , 10);

    echo "La longueur est : ". $longueur;
    echo "<br>";

    $largeur = rand(0 , 10);

    echo "La largeur est : ". $largeur;
    echo "<br>";

    function perimetre($largeur,$longueur)
    {
        return 2*($longueur + $largeur);
    }

    echo "Le périmètre est : ". perimetre($largeur,$longueur);
    echo "<br>";

    function surface($largeur,$longueur)
    {
        return $longueur * $largeur;
    }

    echo "La surface est : ". surface($largeur,$longueur);
    echo "<br>";

    function diagonale($largeur,$longueur)
    {
        return sqrt(pow($longueur , 2) + pow($largeur , 2));
    }

    echo "La diagonale est : ". diagonale($largeur,$longueur);
?>