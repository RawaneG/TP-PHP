<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $_SESSION['prenom'] = $_SESSION['nom'] = $_SESSION['email'] = $_SESSION['password'] = 
    $_SESSION['confirm'] = $_SESSION['status'] = '';

    $_SESSION['prenomE'] = $_SESSION['nomE'] = $_SESSION['emailE'] = $_SESSION['passwordE'] = 
    $_SESSION['confirmE'] = $_SESSION['statusE'] = $_SESSION['identique'] = '';

    $_SESSION['lemail'] = $_SESSION['lpassword'] = '';
    $_SESSION['lemailE'] = $_SESSION['lpasswordE'] = $_SESSION['messagel'] = '';
    $_SESSION['message'] = '';

    function test_input($input)
    {
        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        return $input;
    }
    extract($_POST);

                                        // Vérification du formulaire d'inscription

    if(isset($valider))
    {
        if(empty($prenom))
        {
            $_SESSION['prenomE'] = 'Veuillez entrer votre prénom';
        }
        else
        {
            if(!preg_match_all("/^[a-zA-Z ]+$/",$prenom))
            {
                $_SESSION['prenomE'] = 'Veuillez entrer un nom valide, seules les lettres et espaces sont autorisés';
            }
            else
            {
                $_SESSION['prenom'] = test_input($prenom);
            }
        }
        if(empty($nom))
        {
            $_SESSION['nomE'] = 'Veuillez entrer votre nom';
        }
        else
        {
            if(!preg_match("/^[a-zA-Z ]+$/",$nom))
            {
                $_SESSION['nomE'] = 'Veuillez entrer un nom valide, seules les lettres et espaces sont autorisés';
            }
            else
            {
                $_SESSION['nom'] = test_input($nom);
            }
        }
        if(empty($email))
        {
            $_SESSION['emailE'] = 'Veuillez entrer votre email';
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))   
            {
                $_SESSION['emailE'] = 'Veuillez entrer un email valide';
            }
            else
            {
                $_SESSION['email'] = test_input($email);
            }
        }
        if(empty($password))
        {
            $_SESSION['passwordE'] = 'Veuillez entrer votre mot de passe';
        }
        else
        {
            $_SESSION['password'] = test_input($password);
        }
        if(empty($confirm))
        {
            $_SESSION['confirmE'] = 'Veuillez confirmer votre mot de passe';
        }
        else
        {
            $_SESSION['confirm'] = test_input($confirm);
        }
        if(empty($status))
        {
            $_SESSION['statusE'] = 'Veuillez cocher votre rôle';
        }
        else
        {
            $_SESSION['status'] = test_input($status);
        }
        if($_SESSION['confirm'] != $_SESSION['password'])
        {
            $_SESSION['identique'] = "Vos mots de passe ne sont pas identiques";
        }
        if($_SESSION['prenomE'] != '' || $_SESSION['nomE'] != '' || $_SESSION['emailE'] != '' 
        || $_SESSION['passwordE'] != '' || $_SESSION['confirmE'] != '' || $_SESSION['statusE'] != '' 
        || $_SESSION['identique'] != '')
        {
            header('location:../views/register.html.php');
        }
        else
        {
            $infos = [
                'prenom' => $_SESSION['prenom'],
                'nom' => $_SESSION['nom'],
                'email' => $_SESSION['email'],
                'password' => $_SESSION['password'],
                'status' => $_SESSION['status']
            ];

            if(filesize('../views/file.json') == 0)
            {
                $first_record = array($infos);
                $data_to_save = $first_record;
                header('location:../views/login.html.php');
            }
            else
            {
                $old_record = json_decode(file_get_contents('../views/file.json'),true);

                foreach($old_record as $row)
                {
                    if($row['email'] == $_SESSION['email'])
                    {
                        $_SESSION['message'] = "Cet email existe déjà, Veuillez vous connecter";
                    }
                }
                if($_SESSION['message'] != '')
                {
                    header('location:../views/register.html.php');
                }
                else
                {
                    array_push($old_record, $infos);

                    $data_to_save = $old_record;
    
                    header('location:../views/login.html.php');
                }
            }
            if(!file_put_contents('../views/file.json',json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX))
            {
                echo "Erreur de sauvegarde";
            }
        }
    }

                                    // Vérification du formulaire de connexion

    if(isset($valide))
    {
        if(empty($lemail))
        {
            $_SESSION['lemailE'] = "Veuillez remplir votre email";
        }
        else
        {   
            $_SESSION['lemail'] = test_input($lemail);
        }
        if(empty($lpassword))
        {
            $_SESSION['lpasswordE'] = "Veuillez remplir votre mot de passe";
        }
        else
        {
            $_SESSION['lpassword'] = test_input($lpassword);
        }
        
        if($_SESSION['lemailE'] != '' || $_SESSION['lpasswordE'] != '') 
        {
            header('location:../views/login.html.php');
        }
        else
        {
            $old_record = json_decode(file_get_contents('../views/file.json'),true);

                foreach($old_record as $row)
                {
                    if($_SESSION['lemail'] == $row['email'] && $_SESSION['lpassword'] == $row['password'])
                    {
                        $_SESSION['status'] = $row['status'];
                        if($row['status'] == 'admin')
                        {
                            header('location:../views/accueil.admin.html.php');
                            break;
                        }
                        if($row['status'] == 'visiteur')
                        {
                            header('location:../views/accueil.visiteur.html.php');
                            break;
                        }
                    }
                    else
                    {
                        $_SESSION['messagel'] = "votre email ou votre mot de passe incorrect";
                        header('location: ../views/login.html.php');
                    }
                }
        }
    }
?>
