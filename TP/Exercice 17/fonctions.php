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

    function result($nombre)
    {
        if($nombre < 10)
        {
            $nombre = "Veuillez entrer un nombre supérieur à 10";
            return $nombre;
        }
        else
        {
            $T = ['premier'=> [],'inferieur' => [],'superieur' => []];
                for($j = 1; $j <= $nombre; $j++)
                {
                    if(est_premier($j))
                    {
                        $T['premier'][] = $j;
                    }
                    if($j < moyenne($nombre))
                    {
                        $T['inferieur'][] = $j;
                    }
                    if($j > moyenne($nombre))
                    {
                        $T['superieur'][] = $j;
                    }
                }
?>
<table>
    <tr>
        <th>Les nombres premiers</th>
    </tr>
<tr>
<?php
            for($i = 0; $i < count($T['premier']); $i++)
            {
                echo "<td>".$T['premier'][$i]."<td>";
            }
?>
</tr>
</table>

<table>
<tr>
        <th>Les nombres inférieurs à la moyenne</th>
</tr>
<tr>
<?php
            for($i = 0; $i < count($T['inferieur']); $i++)
            {
                echo "<td>".$T['inferieur'][$i]."<td>";
            }
?>
</tr>
</table>

<table>
<tr>
        <th>Les nombres supérieurs à la moyenne</th>
</tr>
<tr>
<?php
            for($i = 0; $i < count($T['superieur']); $i++)
            {
                echo "<td>".$T['superieur'][$i]."<td>";
            }
?>
</tr>
</table>
<?php
        }
    }
?>
