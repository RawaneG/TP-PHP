<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>
<?php
    include_once('../Gfunctions.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function array_loop($input)
    {
?>
    <table>
<?php
            echo "<tr>";
            for($i = 0; $i < count($input); $i++)
            {
                if($i % 4 == 0)
                {
                    echo "</tr>";
                    echo "<tr>";
                }
                echo "<td>".$input[$i]."</td>";
            }
            echo "</tr>";
?>
    </table>
<?php
    }
?>
