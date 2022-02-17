<?php
    $cote = rand(0,10);

    function cote($cote)
    {
        return $cote;
    }

    echo "Le côté est : ". cote($cote);
    echo "<br>";

    function perimetre($cote)
    {
        return $cote * 4;
    }

    echo "Le perimètre est : ". perimetre($cote);
    echo "<br>";

    function surface($cote)
    {
        return $cote * $cote;
    }

    echo "La surface est : ". surface($cote);
    echo "<br>";

    function diagonale($cote)
    {
        return $cote * sqrt(2);
    }

    echo "La diagonale est : ". diagonale($cote);
    echo "<br>";
?>