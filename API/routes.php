<?php

    Flight::route('/', function(){
        //header('Content-type: application/json');
    });

    /**
     * --------------------------------------------------------------------------------
     *                            Actions liées aux comptes
     * --------------------------------------------------------------------------------
     * */


    /* -------------------- Création de compte -------------------- */

    /**
     * Description : Fonction pour savoir si un identifiant est déjà pris
     * Entrée : Une chaîne de caractères
     * Sortie : Un booléen
     */
    function identExist($identifiant) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT identifiant
                                         FROM utilisateur
                                         WHERE identifiant = :identifiant');
        
        $requeteMySQL -> execute(array(':identifiant' => $identifiant));

        return $requeteMySQL -> rowCount();
    }

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
        header('Content-type: application/json');

        try {
            if (identExist($_POST['identifiant']))
                throw new Exception('Identifiant déjà pris.');

            if (isset($_POST['classe'])) { // si l'utilisateur est un élève
                ajoutUtilEleve($_POST['nom'], $_POST['prenom'], $_POST['identifiant'], $_POST['mdp'], $_POST['role'], $_POST['classe']);
            } else {
                ajoutUtil($_POST['nom'], $_POST['prenom'], $_POST['identifiant'], $_POST['mdp'], $_POST['role']);
            }

            $info['success'] = true;
            $info['infoUtil'] = $_POST;
            $info['infoUtil']['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // On chiffre le mdp pour pas qu'il soit en clair dans le message d'information

        } catch (Exception $e){
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
        }

        echo json_encode($info);
    });

    /* -------------------- Connexion à un compte -------------------- */

    /**
     * Description : Fonction pour obtenir le mot de passe chiffré d'un utilisateur.
     * Entrée :
     *      - util : chaîne de caractères
     * Sortie :
     *      - chaîne de caractères
     */
    function obtUtilMdp($identifiant) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT mdp
                                         FROM utilisateur
                                         WHERE identifiant = :ident');

        $requeteMySQL -> execute(array(':ident' => $identifiant));

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
    function identMdpCorrespond($identifiant, $mdp) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $mdpChiffre = obtUtilMdp($identifiant);

        return password_verify($mdp, $mdpChiffre);
    }

    function obtUtilRole($identifiant) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT role
                                         FROM utilisateur
                                         WHERE identifiant = :ident');

        $requeteMySQL -> execute(array(':ident' => $identifiant));

        return $requeteMySQL -> fetch()[0];
    }

    Flight::route('POST /login', function(){
        header('Content-type: application/json');

        try {
            $identifiant = $_POST['identifiant'];
            $mdp = $_POST['mdp'];

            if (isset($identifiant) && isset($mdp)){
                if(identMdpCorrespond($identifiant, $mdp)){
                    $_SESSION['utilisateur'] = $identifiant;
                    $_SESSION['role'] = obtUtilRole($identifiant);
    
                    $info['success'] = true;
                    $info['infoUtil'] = $_SESSION;                
                } else {
                    throw new Exception("L'identifiant et le mot de passe ne correspondent pas.");
                }
            } else {
                throw new Exception("L'identifiant ou le mot de passe n'a pas été saisi.");
            }
        } catch (Exception $e) {
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
        }

        echo json_encode($info);
        
    });

    /* -------------------- Déconnexion à un compte -------------------- */

    Flight::route('GET /logout', function(){
        header('Content-type: application/json');

        $info = array();

        try {
            session_destroy();
            $info['success'] = true;
        } catch (Exception $e) {
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
        }

        echo json_encode($info);
        
    });

    /**
     * --------------------------------------------------------------------------------
     *                            Actions pour lire des données
     * --------------------------------------------------------------------------------
     * */

    /* -------------------- Utilisateur -------------------- */

    /**
     * Description : Fonction pour obtenir l'information de tous les utilisateurs
     * Sortie :
     *      - Un tableau de tableau
     */
    function obtUtils() {
        $resultat = array();

        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> query('SELECT num_util, nom, prenom, identifiant, role, classe
                                       FROM utilisateur');

        while ($ligne = $requeteMySQL -> fetch(PDO::FETCH_NUM)){
            if (isset($ligne[5])) {
                array_push($resultat, array('num_util' => $ligne[0],
                                            'nom' => $ligne[1],
                                            'prenom' => $ligne[2],
                                            'identifiant' => $ligne[3],
                                            'role' => $ligne[4],
                                            'classe' => $ligne[5]));
            } else {
                array_push($resultat, array('num_util' => $ligne[0],
                                            'nom' => $ligne[1],
                                            'prenom' => $ligne[2],
                                            'identifiant' => $ligne[3],
                                            'role' => $ligne[4]));
            }
                
        }

        return $resultat;
    }

    Flight::route('GET /utilisateur', function(){
        header('Content-type: application/json');

        try {
            if (isset($_SESSION['utilisateur'])){
                $utils = obtUtils();
    
                echo json_encode($utils);
            } else {
                throw new Exception('Vous devez être connecté(e) pour effectuer cette opération.');
            }
        } catch (Exception $e) {
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
            echo json_encode($info);
        }
    });

    /**
     * Description : Fonction pour savoir si un utilisateur est présent dans la base de données
     * Entrée :
     *      - num_util : Un entier
     * Sortie :
     *      - Un booléen
     */
    function utilExist($num_util) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT num_util
                                         FROM utilisateur
                                         WHERE num_util = :num_util');

        $requeteMySQL -> execute(array(':num_util' => $num_util));

        return $requeteMySQL -> rowCount();
    }

    /**
     * Description : Fonction pour obtenir les informations d'un utilisateur
     * Entrée :
     *      - num_util : Un entier
     * Sortie :
     *      - Un tableau
     */
    function obtUtil($num_util) {
        $resultat = array();

        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT num_util, nom, prenom, role, classe
                                         FROM utilisateur
                                         WHERE num_util = :num_util');

        $requeteMySQL -> execute(array(':num_util' => $num_util));

        $ligne = $requeteMySQL -> fetch();

        if (isset($ligne[4])) {
            $resultat = array('num_util' => $ligne[0],
                              'nom' => $ligne[1],
                              'prenom' => $ligne[2],
                              'identifiant' => $ligne[3],
                              'role' => $ligne[4],
                              'classe' => $ligne[5]);
        } else {
            $resultat = array('num_util' => $ligne[0],
                              'nom' => $ligne[1],
                              'prenom' => $ligne[2],
                              'identifiant' => $ligne[3],
                              'role' => $ligne[4]);
        }

        return $resultat;
    }

    Flight::route('GET /utilisateur/@num_util', function($num_util){
        header('Content-type: application/json');

        try {
            if (isset($_SESSION['utilisateur'])){
                if (utilExist($num_util)) {
                    $util = obtUtil($num_util);
    
                    echo json_encode($util);
                } else {
                    throw new Exception("Utilisateur n'existe pas dans la base de données.");
                }
            } else {
                throw new Exception('Vous devez être connecté(e) pour effectuer cette opération.');
            }
        } catch (Exception $e) {
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
            echo json_encode($info);
        }
        
    });

    /* -------------------- Classe -------------------- */
    
    /**
     * Description : Fonction pour obtenir l'information de tous les classes
     * Sortie :
     *      - Un tableau de tableau
     */
    function obtClasses() {
        $resultat = array();

        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> query('SELECT *
                                           FROM classe');

        while ($ligne = $requeteMySQL -> fetch(PDO::FETCH_NUM)){
            array_push($resultat, array('num_classe' => $ligne[0],
                                        'niveau' => $ligne[1],
                                        'groupe' => $ligne[2],
                                        'demi_groupe' => $ligne[3]));
                
        }

        return $resultat;
    }

    Flight::route('GET /classe', function(){
        header('Content-type: application/json');

        try {
            if (isset($_SESSION['utilisateur'])){
                $classes = obtClasses();
    
                echo json_encode($classes);
            } else {
                throw new Exception('Vous devez être connecté(e) pour effectuer cette opération.');
            }
        } catch (Exception $e) {
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
        }
        
    });

    /**
     * Description : Fonction pour savoir si une classe existe dans la base de données
     * Entrée :
     *      - num_classe : Un entier
     * Sortie :
     *      - Un booléen
     */
    function classeExist($num_classe) {
        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT num_classe
                                         FROM classe
                                         WHERE num_classe = :num_classe');

        $requeteMySQL -> execute(array(':num_classe' => $num_classe));

        return $requeteMySQL -> rowCount();
    }

    /**
     * Description : Fonction pour obtenir les informations d'une classe
     * Entrée :
     *      - num_classe : Un entier
     * Sortie :
     *      - Un tableau
     */
    function obtClasse($num_classe) {
        $resultat = array();

        $pdo = Flight::get('pdo');

        $pdo -> exec("SET NAMES UTF8");

        $requeteMySQL = $pdo -> prepare('SELECT *
                                         FROM classe
                                         WHERE num_classe = :num_classe');

        $requeteMySQL -> execute(array(':num_classe' => $num_classe));

        $ligne = $requeteMySQL -> fetch();

        $resultat = array('num_classe' => $ligne[0],
                          'niveau' => $ligne[1],
                          'groupe' => $ligne[2],
                          'demi-groupe' => $ligne[3]);

        return $resultat;
    }

    Flight::route('GET /classe/@num_classe', function($num_classe){
        header('Content-type: application/json');

        try {
            if (isset($_SESSION['utilisateur'])){
                if (classeExist($num_classe)) {
                    $classe = obtClasse($num_classe);
    
                    echo json_encode($classe);
                } else {
                    throw new Exception("Cette classe n'a pas été trouvée dans la base de données.");
                }
            } else {
                throw new Exception("Vous devez être connecté(e) pour effectuer cette opération.");
            }
        } catch (Exception $e) {
            $info['success'] = false;
            $info['errMsg'] = $e -> getMessage();
            echo json_encode($info);
        }
    });

    
?>