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
    <title>Exercice 13</title>
</head>
<body>
    <div class="first">
    <h1>Exercice 13</h1>
    <form action="controller.php" method="post">
        <label for="number"> Veuillez entrer le nombre de phrases que vous désirez :
            <textarea id="number" name="value" type="textarea" rows="6" cols="50"><?php
            if(isset($_SESSION['entrer']) && $_SESSION['entrer'] != '')
            {
                echo $_SESSION['entrer'];
            }
            ?></textarea>
        </label>
        <input type="submit" value="Valider" name="solution"> 
       <label for="number">
            <textarea id="number" name="value1" type="textarea" rows="6" cols="50" readonly><?php
                if(isset($_SESSION['valeur']) && $_SESSION['valeur'] != [])
                { 
                    for($i = 0; $i < count($_SESSION['valeur']);$i++)
                    {
                        echo $_SESSION['valeur'][$i]."\n";
                    }
                }
            ?>
            </textarea>
        </label> 
        <div class="message">
            <?php
                if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                {
                    echo $_SESSION['message'];
                    echo "<br>";
                }
                session_destroy();
            ?>
        </div>
    </form>
    </div>
    <div class="second">
        <a href="../Exercice 12/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 14/index.php">Exercice Suivant</a>
    </div>
</body>
</html>