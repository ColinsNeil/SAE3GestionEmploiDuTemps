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
<header>
    <div id="page">
        <div id="header" class="site-header">
            <div id="logo">
                <a href="accueil.php"><img src="../assets/images/logo-EDTMANAGER.png" alt="Logo EDT MANAGER"></img></a>
            </div>
            <div class="wrap">
                <div id="branding" role="banner">
                    <div class="section-header">
                        <h2>Emploi du temps</h2>           <!-- A AFFICHER QUAND CONNECTER  -->
                        <p><a href="">Cette semaine</a></p>
                        <p><a href="">Ensemble des semaines</a></p>
                    </div>
                    <div class="section-header">
                        <h2>Outils UPJV</h2>
                        <p><a href="https://pedag.u-picardie.fr/moodle/upjv/">Moodle</a></p>
                        <p><a href="https://sconotes.iut-amiens.fr/">Sconotes</a></p>
                        <p><a href="https://webmail.etud.u-picardie.fr/">Webmail</a></p>
                    </div>
                    <div class="section-header">
                        <h2>Informations</h2>
                        <p><a href="">Les adresses mails</a></p> <!-- A AFFICHER QUAND CONNECTER -->
                        <p><a href="https://www.iut-amiens.fr/">Site IUT</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<body>
    <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){ ?>     <!-- Page utilisateur connecté -->
    <div class="container">
        <div class="content">
            <h1>welcome <span><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?> </span></h1>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
    <?php }else{ ?>     <!-- Page utilisateur non connecté -->
    <div class="container">
        <div class="content">
            <h1>Bienvenue sur la plateforme <span>EDT MANAGER !</span></h1>
            <section id="notification">

            </section>
            <section id="profil">
                <a href="login.php" class="btn"><img src="../assets/images/login-icon.png" alt="Icone pour se connecter" id="login-button"></img></a>
                <button type="button" id="btnConnect" name="SeConnecter" onClick="window.location.href='login.php'">Se connecter</button>
            </section>
            <section id="actualite">
                
            </section>
        </div>
    </div>
    <?php } ?>
</body>
<footer>
    <div class="container">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> - EDT MANAGER</p> 
    </div>
</footer>
</html>