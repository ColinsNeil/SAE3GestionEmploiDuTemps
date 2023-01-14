<?php 
    // Importation de libraires utiles
    require('./includes/Flight/flight/Flight.php');
    require('./includes/pdo.php');

    // Importation du fichier contenant tout les routes
    require ('./routes.php');

    // On met l'objet pdo dans flight
    Flight::set('pdo', $pdo);

    session_start();

    Flight::start();
?>