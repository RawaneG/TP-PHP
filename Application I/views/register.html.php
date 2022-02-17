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
            include_once "CSS/register.css";
        ?>
    </style>
    <title>Inscription</title>
</head>
<body>
    <div class="content">
        <div class="side_image">
            <div class="message_erreur">
                <div class="membre_content">
                    <div class="membre">
                        <p>Vous avez déjà un compte ? Veuillez donc cliquer ci-dessous  </p>
                        <a href="login.html.php">Connexion</a>
                    </div>
                </div>
                <div class="message_content">
                    <div class="message">
                        <div>
                            <?php 
                                if(isset($_SESSION['prenomE']) && $_SESSION['prenomE'] != '')
                                {
                                    echo $_SESSION['prenomE'];
                                }
                            ?>
                        </div>
                        <div>
                            <?php 
                                if(isset($_SESSION['nomE']) && $_SESSION['nomE'] != '')
                                {
                                    echo $_SESSION['nomE'];
                                }
                            ?>
                        </div>
                        <div>
                            <?php 
                                if(isset($_SESSION['emailE']) && $_SESSION['emailE'] != '')
                                {
                                    echo $_SESSION['emailE'];
                                }
                            ?>
                        </div>
                        <div>    
                            <?php 
                                if(isset($_SESSION['passwordE']) && $_SESSION['passwordE'] != '')
                                {
                                    echo $_SESSION['passwordE'];
                                }
                            ?>
                        </div>
                        <div>
                            <?php 
                                if(isset($_SESSION['confirmE']) && $_SESSION['confirmE'] != '')
                                {
                                    echo $_SESSION['confirmE'];
                                }
                            ?>
                        </div>
                        <div>
                            <?php 
                                if(isset($_SESSION['statusE']) && $_SESSION['statusE'] != '')
                                {
                                    echo $_SESSION['statusE'];
                                }
                            ?>
                        </div>
                        <div>
                            <?php 
                                if(isset($_SESSION['identique']) && $_SESSION['identique'] != '')
                                {
                                    echo $_SESSION['identique'];
                                }
                            ?>
                        </div>
                        <div>
                            <?php 
                                if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                                {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="register_form">
            <div class="title">
                <h1>Inscription</h1>
            </div>
            <div class="form">
            <form action="../controllers/security.php" method="post">
                <input type="text" name="prenom" placeholder="Veuillez entrer votre prénom">
                <input type="text" name="nom" placeholder="Veuillez entrer votre nom">
                <input type="text" name="email" placeholder="Veuillez entrer votre email">
                <input type="password" name="password" placeholder="Veuillez entrer votre mot de passe">
                <input type="password" name="confirm" placeholder="Veuillez confirmer votre mot de passe">

                <label>Veuillez choisir votre rôle : </label>
                    <div class="cocher">
                        <div class="admin">
                            <label for="admin">Admin</label>
                            <input type="radio" id="admin" name="status" value="admin">
                        </div>
                        <div class="visiteur">
                            <label for="visiteur">Visiteur</label>
                            <input type="radio" id="visiteur" name="status" value="visiteur"> 
                        </div>
                    </div>
               
                <input type="submit" value="Soumettre" name="valider">
            </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    session_destroy();
?>