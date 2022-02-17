<?php
    session_start();
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
    <title>Exercice 10</title>
</head>
<body>
    <div class="first">
    <h1>Exercice 10</h1>
    <form action="controller.php" method="post">
        <label for="number"> Veuillez entrer un nombre de votre choix :
            <input id="number" name="number" type="text">
        </label>
        <input type="submit" value="Valider" name="solution"> 
        <div class="message">
            <?php 
                if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                {
                    echo $_SESSION['message'];
                }
                if(isset($_SESSION['valeur']) && $_SESSION['valeur'] != '')
                {
                    champ($_SESSION['valeur']);
                }
                session_destroy();
            ?>
        </div>
    </form>
    </div>
    <div class="second">
        <a href="../Exercice 9/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 11/index.php">Exercice Suivant</a>
    </div>
</body>
</html>