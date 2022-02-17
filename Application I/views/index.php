<?php
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
            include_once "CSS/style.css";
        ?>
    </style>
    <title>Accueil</title>
</head>
<body>
    <div class="content">
        <h1>Bienvenue</h1>
        <div class="access">
            <a href="register.html.php">Inscription</a>
            <a href="login.html.php">Connexion</a>
        </div>
    </div>
</body>
</html>