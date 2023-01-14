<?php

    Flight::route('/', function(){
        //header('Content-type: application/json');
    });

    /* ---------- Actions liées aux comptes ---------- */

    /**
     * Description : Fonction pour créer un utilisateur (admin ou professeur).
     * Entrée :
     *      - nom : chaîne de caractères
     *      - prenom : chaîne de caractères
     *      - identifiant : chaîne de caractères
     *      - mdp : chaîne de caractères
     *      - role : chaîne de caractères
    */
    function ajoutUtil($nom, $prenom, $identifiant, $mdp, $role) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $mdpChiffre = password_hash($mdp, PASSWORD_DEFAULT);

        $requeteMySQL = $pdo -> prepare('INSERT INTO utilisateur (nom, prenom, identifiant, mdp, role) VALUES (:nom, :prenom, :identifiant, :mdp, :role)');
        $requeteMySQL -> execute(array(':nom' => $nom, ':prenom' => $prenom, ':identifiant' => $identifiant, ':mdp' => $mdpChiffre, ':role' => $role));
    }

    /**
     * Description : Fonction pour créer un utilisateur (élève).
     * Entrée :
     *      - nom : chaîne de caractères
     *      - prenom : chaîne de caractères
     *      - identifiant : chaîne de caractères
     *      - mdp : chaîne de caractères
     *      - role : chaîne de caractères
     *      - classe : entier
    */
    function ajoutUtilEleve($nom, $prenom, $identifiant, $mdp, $role, $classe) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $mdpChiffre = password_hash($mdp, PASSWORD_DEFAULT);

        $requeteMySQL = $pdo -> prepare('INSERT INTO utilisateur (nom, prenom, identifiant, mdp, role, classe) VALUES (:nom, :prenom, :identifiant, :mdp, :role, :classe)');
        $requeteMySQL -> execute(array(':nom' => $nom, ':prenom' => $prenom, ':identifiant' => $identifiant, ':mdp' => $mdpChiffre, ':role' => $role, ':classe' => $classe));
    }

    Flight::route('POST /register', function(){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $identifiant = $_POST['identifiant'];
        $mdp = $_POST['mdp'];
        $role = $_POST['role'];

        if (isset($_POST['classe'])) { // si l'utilisateur est un élève
            $classe = $_POST['classe'];
            ajoutUtilEleve($nom, $prenom, $identifiant, $mdp, $role, $classe);
        } else {
            ajoutUtil($nom, $prenom, $identifiant, $mdp, $role);
        }
    });

    /**
     * Description : Fonction pour obtenir le mot de passe chiffré d'un utilisateur.
     * Entrée :
     *      - util : chaîne de caractères
     * Sortie :
     *      - chaîne de caractères
     */
    function obtUtilMdp($util) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT mdp
                                           FROM utilisateur
                                          WHERE identifiant = :id');

        $requeteMySQL -> execute(array(':id' => $util));

        return $requeteMySQL -> fetch()[0];
    }

    /**
     * Description : Fonction pour savoir si le mot de passe et l'identifiant d'un utilisateur correspondent
     * Entrée :
     *      - util : chaîne de caractères
     *      - mdp : chaîne de caractères
     * Sortie :
     *      - Un booléen
     */
    function utilMdpCorrespond($util, $mdp) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $mdpChiffre = obtUtilMdp($util);

        return password_verify($mdp, $mdpChiffre);
    }

    Flight::route('POST /login', function(){
        $util = $_POST['util'];
        $mdp = $_POST['mdp'];

        if (isset($util) && isset($mdp)){
            if(utilMdpCorrespond($util, $mdp)){
                $_SESSION['utilisateur'] = $util;
            }
        }
    });

    Flight::route('GET /logout', function(){
        session_destroy();
    });
    
?>