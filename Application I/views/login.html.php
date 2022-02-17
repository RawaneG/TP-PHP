<?php
    session_start();
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
            include_once "CSS/login.css";
        ?>
    </style>
    <title>Connexion</title>
</head>
<body>
    <div class="content">
        <div class="side_image">
            <div class="message_erreur">
                <div class="membre_content">
                    <div class="membre">
                        <p>Vous n'avez pas encore de compte ? Veuillez donc cliquer ci-dessous  </p>
                        <a href="register.html.php">Inscription</a>
                    </div>
                </div>
                <div class="message_content">
                    <div class="message">
                        <div>
                            <?php
                                if(isset($_SESSION['lemailE']) && $_SESSION['lemailE'] != '')
                                {
                                    echo $_SESSION['lemailE'];
                                }
                            ?>
                        </div>
                        <div>   
                            <?php
                                if(isset($_SESSION['lpasswordE']) && $_SESSION['lpasswordE'] != '')
                                {
                                    echo $_SESSION['lpasswordE'];
                                }
                            ?>
                        </div>
                        <div>   
                            <?php
                                if(isset($_SESSION['messagel']) && $_SESSION['messagel'] != '')
                                {
                                    echo $_SESSION['messagel'];
                                    unset($_SESSION['messagel']);
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="register_form">
            <div class="title">
                <h1>Connexion</h1>
            </div>
            <div class="form">
            <form action="../controllers/security.php" method="post">
                <input type="text" name="lemail" placeholder="Veuillez entrer votre email">
                <input type="password" name="lpassword" placeholder="Veuillez entrer votre mot de passe">
                <input type="submit" value="Soumettre" name="valide">
            </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    session_destroy();
?>
