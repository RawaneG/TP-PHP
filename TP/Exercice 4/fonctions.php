<?php 
    $nombre1 = rand(0,10);

    echo "Le nombre 1 est égal à : ". $nombre1;
    echo "<br>";

    $nombre2 = rand(0,10);

    echo "Le nombre 2 est égal à : ". $nombre2;
    echo "<br>";

    function permutation1($nombre1,$nombre2)
    {
        $temp = $nombre2;
        $nombre2 = $nombre1;
        $nombre1 = $temp;
        return $nombre1;
    }
    function permutation2($nombre1,$nombre2)
    {
        $temp = $nombre2;
        $nombre2 = $nombre1;
        $nombre1 = $temp;
        return $nombre2;
    }
    echo "Permutation : ";
    echo "<br>";

    echo "Le nombre 1 est égal à : ". permutation1($nombre1,$nombre2);
    echo "<br>";

    echo "Le nombre 2 est égal à : ". permutation2($nombre1,$nombre2);
    echo "<br>";

?>