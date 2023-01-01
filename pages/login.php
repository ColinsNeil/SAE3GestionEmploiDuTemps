<?php
include('../config/config.php');
session_start();

if(isset($_POST['submit'])){
    $identifiant = $_POST['identifiant'];
    $pass = hash("sha256", $_POST['mdp']);

    /* $checkid = $pdo->prepare("select * from utilisateur where identifiant = ?");
    $checkid->execute([$identifiant]); 
    $user = $checkid->fetch(); */

    $checkpass = $pdo->prepare("select * from utilisateur where identifiant = '$identifiant' && mdp = ?");
    $checkpass->execute([$pass]); 
    $result = $checkpass->fetch(PDO::FETCH_ASSOC);

    if($result){
        $_SESSION['user_id'] = $result['identifiant'];
        $_SESSION['nom'] = $result['nom'];
        $_SESSION['prenom'] = $result['prenom'];
        $_SESSION['role'] = $result['role'];
        $_SESSION['classe'] = $result['classe'];
        header('location:accueil.php');
    }else{
        $error[] = 'identifiant ou mot de passe incorrect !';
    }
};
?>

<!DOCTYPE html>
<html lang="fr" and dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Application de gestion des emplois du temps pour l'IUT d'Amiens - UPJV.">
    <meta name="keywords" content="Emploi du temps, IUT Amiens, UPJV"/>
    <meta name="author" content="Thomas FOUQUEROLLE, Loryne BALLESTER, Colins NEIL NIMALARAJ, Quentin LOISEL, Matheo BACHELIER">
    <meta name="copyright" content="Thomas FOUQUEROLLE, Loryne BALLESTER, Colins NEIL NIMALARAJ, Quentin LOISEL, Matheo BACHELIER">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>EDT MANAGER</title>
    <link rel="icon" type="image/png" href="../assets/images/favicon-EDTMANAGER.png">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<div id="container-connection">
    <h1 style="cursor:default;">Connexion</h1>
    <span class="close-btn">
        <a href="accueil.php"><img src="../assets/images/cross.png" alt="Croix pour fermer la fenêtre de connexion"></img></a>
    </span>
    <form action="" method="POST">
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
        ?>
        <input type="text" name="identifiant" placeholder="Identifiant">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="submit" name="submit" class="btn-connect" value="Se connecter">
    </form>
 </div>