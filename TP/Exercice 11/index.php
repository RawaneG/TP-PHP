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
    <title>Exercice 11</title>
</head>
<body>
    <div class="first">
    <h1>Exercice 11</h1>
    <form action="controller.php" method="post">
        <label for="number"> Veuillez entrer un entier supérieur à 10000 :
            <input id="number" name="entier" type="text">
        </label>
        <input type="submit" value="Valider" name="solution"> 
        <div class="message">
            <?php
                if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                {
                    echo $_SESSION['message'];
                    echo "<br>";
                }
                if(isset($_SESSION['valeur']) && $_SESSION['valeur'] != '')
                {
                    echo result($_SESSION['valeur']);
                }
                session_destroy();
            ?>
        </div>
    </form>
    </div>
    <div class="second">
        <a href="../Exercice 10/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 12/index.php">Exercice Suivant</a>
    </div>
</body>
</html>