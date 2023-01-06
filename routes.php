<?php
    Flight::route('/', function(){
        $tab = array('_SESSION' => $_SESSION);

        Flight::render('./pages/accueil.tpl', $tab);
    });

    Flight::route('GET /login', function(){
        $tab = array('_SESSION' => $_SESSION,
                     'error' => array());

        if(isset($_SESSION['user_id'])){
            Flight::redirect("/");
        }else{
            Flight::render('./pages/login.tpl', $tab);
        }
    });

    Flight::route('POST /login', function(){
        $error = array();
        $pdo = Flight::get('pdo');

        if(isset($_POST['submit'])){
            $identifiant = $_POST['identifiant'];
            $pass = hash("sha256", $_POST['mdp']);
        
            $checkpass = $pdo->prepare("select * from utilisateur where identifiant = '$identifiant' && mdp = ?");
            $checkpass->execute([$pass]); 
            $result = $checkpass->fetch(PDO::FETCH_ASSOC);
        
            if($result){
                $_SESSION['user_id'] = $result['identifiant'];
                $_SESSION['role'] = $result['role'];
                if($result['nom'] != NULL || $result['prenom'] != NULL){
                    $_SESSION['nom'] = $result['nom'];
                    $_SESSION['prenom'] = $result['prenom'];
                }
                if($result['classe'] != NULL){
                    $searchclasse = $pdo->prepare("select * from classe where num_classe = ?");
                    $searchclasse->execute([$result['classe']]); 
                    $classe = $searchclasse->fetch(PDO::FETCH_ASSOC);

                    if($result['classe'] != NULL){
                        $_SESSION['niveau'] = $classe['niveau'];
                        $_SESSION['groupe'] = $classe['groupe'];
                        $_SESSION['demi-groupe'] = $classe['demi_groupe'];
                    }
                }

                Flight::redirect("/");
            }else{
                $error[] = 'identifiant ou mot de passe incorrect !';
            }

            $tab = array('_SESSION' => $_SESSION,
                         'error' => $error);
        };

        Flight::render('./pages/login.tpl', $tab);
    });

    Flight::route('GET /logout', function(){
        session_destroy();
        Flight::redirect("/");
    });

    Flight::route('GET /users', function(){
        $pdo = Flight::get('pdo');

        $geteleve = $pdo->prepare("select u.identifiant,u.nom,u.prenom,c.niveau,c.groupe,c.demi_groupe from utilisateur u,classe c where u.role = 'eleve' and c.num_classe=u.classe");
        $geteleve->execute(); 
        $eleve = $geteleve->fetchAll();
        
        $getprof = $pdo->prepare("select * from utilisateur where role = 'prof'");
        $getprof->execute(); 
        $prof = $getprof->fetchAll();

        $tab = array('_SESSION' => $_SESSION,'eleve' => $eleve, 'prof' => $prof);
        Flight::render('./pages/users.tpl', $tab);
    });

    Flight::route('POST /users', function(){
        $pdo = Flight::get('pdo');

        $inserteleve = $pdo->prepare("insert into");
        $inserteleve->execute(); 
        
        $tab = array('_SESSION' => $_SESSION);
        Flight::render('./pages/users.tpl', $tab);
    });
?>