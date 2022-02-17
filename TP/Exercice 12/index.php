<?php
    include_once 'fonctions.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        <?php
            include 'CSS/style.css';
        ?>
    </style>
    <title>Exercice 12</title>
</head>
<body>
    <div class="first">
    <h1>Exercice 12</h1>
    <form action="controller.php" method="post">
        <label for="number"> Veuillez choisir la langue dont vous voulez voir les 12 mois de l'année 
            (Français - Anglais) :
            <select name="select" id="number">
                <option value="Franc">Français</option>
                <option value="Ang">Anglais</option>
            </select>
        </label>
        <input type="submit" value="Valider" name="solution"> 
        <div class="message">
            <?php
                $tmp;
                $franc_mois = ['Janvier','Avril','Juillet','Octobre','Février','Mai','Aout','Novembre','Mars',
                'Juin','Septembre','Décembre'];
                $ang_mois = ['January','April','July','October','February','May','August','November','March',
                'June','September','December'];

                if(isset($_SESSION['valeur1']) && $_SESSION['valeur1'] != '')
                {
                    array_loop($ang_mois);
                }
                elseif(isset($_SESSION['valeur2']) && $_SESSION['valeur2'] != '')
                {
                    array_loop($franc_mois);
                }
                else
                {
                    array_loop($franc_mois);
                }
                session_destroy();
            ?>
        </div>
    </form>
    </div>
    <div class="second">
        <a href="../Exercice 11/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 13/index.php">Exercice Suivant</a>
    </div>
</body>
</html>