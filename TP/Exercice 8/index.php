<?php
session_start();
include_once('fonctions.php');
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
    <title>Exercice 8</title>
</head>
<body>
    <div class="first">
        <h1>Exercice 8</h1>
        <form action="controller.php" method="post">
            <label for="N"> Veuillez entrer un nombre de votre choix :
                <input id="N" name="N" type="text">
            </label>
            <input type="submit" value="Valider" name="solution"> 
            <div class="message">
                <?php
                if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                {
                    echo $_SESSION['message'];
                }
                ?>
                <ul>
                <?php
                    if(isset($_SESSION['valeur']) && $_SESSION['valeur'] != '')
                    loop($_SESSION['valeur']);
                ?>
                </ul>
            </div>
        </form>
        <?php session_destroy();?>
    </div>
    <div class="second">
        <a href="../Exercice 7/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 9/index.php">Exercice Suivant</a>
    </div>
</body>
</html>