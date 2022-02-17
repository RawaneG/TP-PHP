<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $old_record = json_decode(file_get_contents('file.json'),true); 
    if(isset($_SESSION['lemail']) && $_SESSION['status'] == 'admin')
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        <?php
            include_once 'CSS/showUser.css';
        ?>
    </style>
    <title>Utilisateurs</title>
</head>
<body>
    <table>
        <tr>
    <?php
        foreach($old_record as $row)
            {
                echo "<td>";
                echo "Prénom : ".$row['prenom']."<br>";
                echo "Nom : ".$row['nom']."<br>";
                echo "Email : ".$row['email']."<br>";
                echo "Rôle : ".$row['status']."<br>";
                echo "</td>";         
            }
    ?>
        </tr>
    </table>
</body>
</html>
<?php 
    }   
    else
    {
        header('location:index.php');
    }
?>