<?php 
    // Importation de libraires utiles
    require('./includes/Flight/flight/Flight.php');
    require('./includes/Smarty/libs/Smarty.class.php');
    require('./includes/pdo.php');

    // Importation du fichier contenant tout les routes
    require ('./routes.php');

    // On demande à Flight d'utiliser Smarty pour le rendu des pages HTMLs
    Flight::register('view', 'Smarty', array(), function($smarty){
        $smarty->template_dir = './pages/';
        $smarty->compile_dir = './templates_c/';
        $smarty->config_dir = './config/';
        $smarty->cache_dir = './cache/';
    });

    // On ajoute une méthode render à Flight qui affiche un template en lui transmettant un tableau de données
    Flight::map('render', function($template, $data){
        Flight::view()->assign($data);
        Flight::view()->display($template);
    });

    // On met l'objet pdo dans flight
    Flight::set('pdo', $pdo);

    session_start();

    Flight::start();

    /*header("location:pages/accueil.php");*/
?>