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
        <link rel="icon" type="image/png" href="assets/images/favicon-EDTMANAGER.png">
        <link rel="stylesheet" href="includes/style.css">
        <script src="includes/login.js"></script>
    </head>
    <body>
        <img src="assets/images/login-icon.png" alt="Icon for login" id="login-button" onclick="openLogin()"></img>
        <div id="container-connection">
            <h1 style="cursor:default;">Connexion</h1>
            <span class="close-btn">
                <img src="assets/images/cross.png" alt="Croix pour fermer la fenêtre de connexion" onclick="closeLogin()"></img>
            </span>
            <form action="index.php" method="POST">
                <input type="text" name="identifiant" placeholder="Identifiant">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <input type="submit" class="btn-connect" value="Se connecter" onclick="validate()">
            </form>
        </div>
        <!-- <div class="container">
            <div class="content">
                <h3>hi, <span>admin</span></h3>
                <h1>welcome <span><?php echo $_SESSION['admin_name'] ?> </span></h1>
                <p>this is an admin page</p>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">register</a>erg
                <a href="logout.php" class="btn">logout</a>
            </div>
        </div> -->
    </body>
</html>