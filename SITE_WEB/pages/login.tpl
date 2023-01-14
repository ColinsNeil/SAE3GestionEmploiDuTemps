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
        <title>EDT MANAGER - Connexion</title>
        <link rel="icon" type="image/png" href="./assets/images/favicon-EDTMANAGER.png">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>

    <body>
        <div id="container-connection">
            <h1 style="cursor:default;">Connexion</h1>
            <span class="close-btn">
                <a href="./"><img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre de connexion"></img></a>
            </span>
            <form action="" method="POST">
                <input type="text" name="identifiant" placeholder="Identifiant">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <input type="submit" name="submit" class="btn-connect" value="Se connecter">
            </form>
        </div>
        <div id="error">
            {if isset($error)}
                {foreach from=$error item=$e}
                    <span class="error-msg">{$e}</span>
                {{/foreach}}
            {/if}
        </div>
    <body>
<html>