<?php
    require 'controller.php';
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
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <div class="first">
    <form action="index.php" method="post">
        <label for="a"> Veuillez entrer la valeur de a :</label>
        <input id="a" name="a" type="text" value="<?php 
        if(isset($solution))
        {
            echo $_POST['a'] ;
        }
        ?>">
        <div class="error">
            <?php 
                if(isset($solution)) 
                {
                    echo $aErr;
                }
            ?>
        </div>
        <label for="b"> Veuillez entrer la valeur de b :</label>
        <input id="b" name="b" type="text" value="<?php 
        if(isset($solution))
        {
            echo $_POST['b'] ;
        }   
        ?>">
        <div class="error">
            <?php 
                if(isset($solution))
                {
                    echo $bErr;
                }
            ?>
        </div>
        <label for="c"> Veuillez entrer la valeur de c :</label>
        <input id="c" name="c" type="text" value="<?php 
        if(isset($solution))
        {
            echo $_POST['c'] ;
        }
        ?>">
        <div class="error">
            <?php 
                if(isset($solution))
                {
                    echo $cErr;
                }
            ?>
        </div>
        <input type="submit" value="Solution" name="solution"> 
        <div class="message">
            <?php
                include_once 'fonctions.php';
            ?>
        </div>
    </form>
    </div>
    <div class="second">
        <a href="../Exercice 5/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 7/index.php">Exercice Suivant</a>
</div>
</body>
</html>