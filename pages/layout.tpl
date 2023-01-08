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
        <link rel="icon" type="image/png" href="./assets/images/favicon-EDTMANAGER.png">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>

    <header>
        <div id="page">
            <div id="header" class="site-header">
                <div id="logo">
                    <a href="./"><img src="./assets/images/logo-EDTMANAGER.png" alt="Logo EDT MANAGER"></img></a>
                </div>
                <div class="wrap">
                    <div id="branding" role="banner">
                        {if isset($_SESSION['user_id'])}
                            <div class="section-header">
                                <h2>Emploi du temps</h2>
                                <p><a href="">Cette semaine</a></p>
                                <p><a href="">Ensemble des semaines</a></p>
                                {if $_SESSION['role'] == 'prof' || $_SESSION['role'] == 'admin'}
                                    <p><a href="">Saisir disponibilités</a></p>
                                {/if}
                            </div>
                        {/if}

                        <div class="section-header">
                            <h2>Outils UPJV</h2>
                            <p><a href="https://pedag.u-picardie.fr/moodle/upjv/">Moodle</a></p>
                            <p><a href="https://sconotes.iut-amiens.fr/">Sconotes</a></p>
                            <p><a href="https://webmail.etud.u-picardie.fr/">Webmail</a></p>
                        </div>

                        <div class="section-header">
                            <h2>Informations</h2>
                            {if isset($_SESSION['user_id'])}
                                <p><a href="liste-email">Les adresses mails</a></p>
                            {/if}
                            <p><a href="https://www.iut-amiens.fr/">Site IUT</a></p>
                        </div>

                        {if isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin'}
                            <div class="section-header">
                                <h2>Espace administrateur</h2>
                                <p><a href="users">Gérer les utilisateurs</a></p>
                                <p><a href="classes">Gérer les classes</a></p>
                                <p><a href="">Gérer les salles</a></p>
                                <p><a href="">Gérer les matières</a></p>
                                <p><a href="">Créer un EDT</a></p>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <body>
        {block name=body}{/block}   
    </body>

    <footer>
        <div class="container">
            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> - EDT MANAGER</p> 
        </div>
    </footer>
</html>