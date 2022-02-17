<?php
    class Point 
    {
        public function x()
        {
            return rand(0,10);
        }
        public function y()
        {
            return rand(0,10);
        }
    }

    $pointA = new Point;
    $pointB = new Point;

    function distance($pointA, $pointB)
    {
        $xa = $pointA->x();
        $xb = $pointB->x();
        $ya = $pointA->y();
        $yb = $pointB->y();
        echo "Soient deux points A et B : ";
        echo "<br>";
        echo "xA est égal à : ". $xa;
        echo "<br>";
        echo "yA est égal à : ". $ya;
        echo "<br>";
        echo "xB est égal à : ". $xb;
        echo "<br>";
        echo "yB est égal à : ". $yb;
        echo "<br>";
        $x = pow($xb - $xa,2);
        $y = pow($yb - $ya,2);
        $distance = sqrt($x + $y);
        return $distance;
    }

    echo "La distance entre A et B est : ". distance($pointA,$pointB);
?>