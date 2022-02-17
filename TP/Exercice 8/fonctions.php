<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function loop($level)
        {
            for($i = 1; $i <= $level; $i++)
            {
                echo $somme = "<li>".$i."</li>";
                "<br>";
            }
        }
?>