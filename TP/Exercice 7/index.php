<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        <?php
            include 'CSS/style.css';
        ?>
    </style>
    <title>Exercice 7</title>
</head>
<body>
    <div class="first">
        <h1>Exercice 7</h1>
        <form method="post">
            <label for="date"> Veuillez un entrer un jour :
                <input id="date" name="date" type="text">
            </label>
            <label for="date"> Veuillez entrer un mois :
                <input id="date" name="date" type="text">
            </label>
            <label for="date"> Veuillez entrer une année :
                <input id="date" name="date" type="text">
            </label>
            <input type="submit" value="Obtenir la date précédente" name="solutionP"> 
            <input type="submit" value="Obtenir la date suivante" name="solutionS"> 
            <div class="message">
                
            </div>
        </form>
    </div>
    <div class="second">
        <a href="../Exercice 6/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 8/index.php">Exercice Suivant</a>
    </div>
</body>
</html>