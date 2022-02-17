<?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            function est_numerique($nombre)
            {
                return is_numeric($nombre);
            }
            function equation($a,$b,$c)
            {
                if($a == 0)
                {
                    if($b == 0 && $c != 0)
                    {
                        $message = "Il n'y a pas de solution";
                    }
                    elseif($b == 0 && $c == 0)
                    {
                        $message = "Il n'y a une infinité de solutions";
                    }
                    else
                    {
                        $x = -1 * ($c/$b);
                        $message = "On a une solution <br> x = ". $x;
                    } 
                }
                    elseif($b == 0 && $c == 0)
                    {
                        $x = -1 * ($b/2*$a);
                        $message = "Delta = 0 ! On a une solution unique <br> x0 = ".$x;
                    }
                else
                {
                    $powerB = pow($b,2);
                    $ac = $a * $c;
                    $delta = $powerB - (4 * $ac);
                    if($delta < 0)
                    {
                        $message = "Delta est négatif il n'y a pas de solution";
                    }
                    else
                    {
                        $x1 = ((-1 * $b) - (sqrt($delta))) / (2 * $a);
                        $x2 = ((-1 * $b) + (sqrt($delta))) / (2 * $a);
                        $message = "Delta est Positif on a deux solutions :<br> x1 = ". $x1 ."<br> x2 = ". $x2;
                    }
                }
                return $message;
            }
?>