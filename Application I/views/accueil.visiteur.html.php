<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if(!isset($_SESSION['lemail']) && !isset($_SESSION['lpassword']))
    {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        <?php
            include_once 'CSS/visiteur.css';
        ?>
    </style>
    <title>Accueil</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="accueil.visiteur.html.php">Accueil</a></li>
            <li><a href="disconnect.php">Déconnexion</a></li>
        </ul>
    </header>
    <section>

    </section>
</body>
</html>