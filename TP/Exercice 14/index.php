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
    <title>Exercice 14</title>
</head>
<body>
    <div class="first">
    <h1>Exercice 14</h1>
    <form action="controller.php" method="post">
        <label for="number"> Veuillez entrer le nombre de numéros de téléphones que vous desirez :
            <textarea id="number" name="value" type="textarea" rows="6" cols="30"><?php
            if(isset($_SESSION['valeur']) && $_SESSION['valeur'] != '')
            {
                echo $_SESSION['valeur'];
            }
            ?></textarea>
        </label>
        <input type="submit" value="Valider" name="solution"> 
        <div class="message">
            <?php
                if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                {
                    echo $_SESSION['message'];
                    echo "<br>";
                }
            ?>
        </div>
        <div class="resultats">
            <label for="number">Numéros Valides :
                <textarea id="number" name="valide" type="textarea" rows="6" cols="30" readonly><?php
                    if(isset($_SESSION['valeurV']) && $_SESSION['valeurV'] != [])
                    {      
                        for($i = 0; $i < count($_SESSION['valeurV']); $i++)
                        {
                            echo $_SESSION['valeurV'][$i]."\n";
                        }
                    }
                ?>
                </textarea>
            </label> 
            <label for="number">Numéros Invalides :
                <textarea id="number" name="invalide" type="textarea" rows="6" cols="30" readonly><?php
                    if(isset($_SESSION['valeurI']) && $_SESSION['valeurI'] != [])
                    {      
                        for($i = 0; $i < count($_SESSION['valeurI']); $i++)
                        {
                            echo $_SESSION['valeurI'][$i]."\n";
                        }
                    }
                ?>
                </textarea>
            </label> 
        </div>
        <div class="deuxieme_mess">
            <?php
            if(isset($_SESSION['cOrange']))
            {
                echo "Opérateur d'Orange : ".$_SESSION['cOrange']."<br>";
            }
            if(isset($_SESSION['cTigo']))
            {
                echo "Opérateur de Tigo : ".$_SESSION['cTigo']."<br>";
            }
            if(isset($_SESSION['cExpresso']))
            {
                echo "Opérateur d'Expresso : ".$_SESSION['cExpresso']."<br>";
            }
            if(isset($_SESSION['cProMobile']))
            {
                echo "Opérateur de Pro Mobile : ".$_SESSION['cProMobile']."<br>";
            }
            ?>
        </div>
    </form>
    </div>
    <div class="second">
        <a href="../Exercice 13/index.php">Exercice Précédent</a>
        <a href="/PHP">Menu</a>
        <a href="../Exercice 15/index.php">Exercice Suivant</a>
    </div>
    <?php 
        session_destroy();
    ?>
</body>
</html>