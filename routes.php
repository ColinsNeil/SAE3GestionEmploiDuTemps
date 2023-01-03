<?php
    Flight::route('/', function(){
        $tab = array('_SESSION' => $_SESSION);

        Flight::render('./pages/accueil.tpl', $tab);
    });

    Flight::route('GET /login', function(){
        $tab = array('_SESSION' => $_SESSION,
                     'error' => array());

        Flight::render('./pages/login.tpl', $tab);
    });

    Flight::route('POST /login', function(){
        $error = array();

        $pdo = Flight::get('pdo');

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
                //header('location:accueil.php');

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

    
?>