<?php
    function getEleve() {
        $pdo = Flight::get('pdo');
        $geteleve = $pdo->prepare("select u.identifiant,u.nom,u.prenom,c.niveau,c.groupe,c.demi_groupe from utilisateur u,classe c where u.role = 'eleve' and c.num_classe=u.classe");
        $geteleve->execute(); 
        $eleve = $geteleve->fetchAll();
        return $eleve;
    }

    function getProf(){  
        $pdo = Flight::get('pdo');   
        $getprof = $pdo->prepare("select * from utilisateur where role = 'prof'");
        $getprof->execute(); 
        $prof = $getprof->fetchAll();
        return $prof;
    }

    function getClasse(){
        $pdo = Flight::get('pdo');
        $getclasse = $pdo->prepare("select * from classe");
        $getclasse->execute(); 
        $classe = $getclasse->fetchAll();
        return $classe;
    }

    function getSalle(){
        $pdo = Flight::get('pdo');
        $getsalle = $pdo->prepare("select * from salle");
        $getsalle->execute(); 
        $salle = $getsalle->fetchAll();
        return $salle;
    }

    function getMatiere(){
        $pdo = Flight::get('pdo');
        $getmatiere = $pdo->prepare("select * from matiere");
        $getmatiere->execute(); 
        $matiere = $getmatiere->fetchAll();
        return $matiere;
    }

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
        $pdo = Flight::get('pdo');
        $error = array();

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

        if (isset($_GET['identifiantdel'])) {  
            $identifiantDel = $_GET['identifiantdel']; 
            $deleteUser = $pdo->prepare("delete from utilisateur where identifiant = '$identifiantDel'");
            $deleteUser->execute(); 
        } 

        if (isset($_GET['identifiantupdt'])) {  
            $identifiantUpdt = $_GET['identifiantupdt'];            // A finir
        } 
 
        $eleve = getEleve();
        $prof = getProf();
        $classe = getClasse();

        $tab = array('_SESSION' => $_SESSION,'eleve' => $eleve, 'prof' => $prof, 'classe' => $classe);
        Flight::render('./pages/users.tpl', $tab);
    });

    Flight::route('POST /users', function(){
        $pdo = Flight::get('pdo');
        $error = array();

        $identifiant = $_POST['identifiant'];
        $nom = $_POST['nom'];
        $nom = strtoupper($nom);
        $prenom = $_POST['prenom'];
        $prenom = ucfirst($prenom);
        $pass = hash("sha256", $_POST['mdp']);

        $checkexist = $pdo->prepare("select * from utilisateur where identifiant = '$identifiant' or (nom = '$nom' and prenom = '$prenom')");
        $checkexist->execute(); 
        $result = $checkexist->fetch(PDO::FETCH_ASSOC);

        if(!($result)){
            if(isset($_POST['classe'])){
                $classe = $_POST['classe'];
                $inserteleve = $pdo->prepare("insert into utilisateur (identifiant,nom,prenom,mdp,role,classe) values ('$identifiant','$nom','$prenom','$pass','eleve','$classe')");
                $inserteleve->execute(); 
            }else{
                $insertprof = $pdo->prepare("insert into utilisateur (identifiant,nom,prenom,mdp,role) values ('$identifiant','$nom','$prenom','$pass','prof')");
                $insertprof->execute(); 
            }
            Flight::redirect("/users");
        }else{
            $error[] = 'utilisateur déjà existant !';
        }
        
        $eleve = getEleve();
        $prof = getProf();
        $classe = getClasse();

        $tab = array('_SESSION' => $_SESSION, 'error' => $error, 'eleve' => $eleve, 'prof' => $prof, 'classe' => $classe);
        Flight::render('./pages/users.tpl', $tab);
    });
    
    Flight::route('GET /classes', function(){
        $pdo = Flight::get('pdo'); 

        if (isset($_GET['classedel'])) {  
            $classeDel = $_GET['classedel']; 
            $deleteClasse = $pdo->prepare("delete from classe where num_classe = '$classeDel'");
            $deleteClasse->execute(); 
        } 

        $classe = getClasse();

        $tab = array('_SESSION' => $_SESSION, 'classe' => $classe);
        Flight::render('./pages/classes.tpl', $tab);
    });

    Flight::route('POST /classes', function(){
        $pdo = Flight::get('pdo'); 
        $error = array();

        $niveau = $_POST['niveau'];
        $niveau = strtoupper($niveau);
        $groupe = $_POST['groupe'];
        $groupe = strtoupper($groupe);
        $demigroupe = $_POST['demi-groupe'];
        $demigroupe = strtoupper($demigroupe);

        $checkexist = $pdo->prepare("select * from classe where niveau = '$niveau' and groupe = '$groupe' and demi_groupe = '$demigroupe'");
        $checkexist->execute(); 
        $result = $checkexist->fetch(PDO::FETCH_ASSOC);

        if(!($result)){
            $insertclasse = $pdo->prepare("insert into classe (niveau,groupe,demi_groupe) values ('$niveau','$groupe','$demigroupe')");
            $insertclasse->execute(); 
            Flight::redirect("/classes");
        }else{
            $error[] = 'classe déjà existante !';
        }

        $classe = getClasse();

        $tab = array('_SESSION' => $_SESSION, 'error' => $error, 'classe' => $classe);
        Flight::render('./pages/classes.tpl', $tab);
    });

    Flight::route('GET /liste-email', function(){
        $prof = getProf();

        $tab = array('_SESSION' => $_SESSION, 'prof' => $prof);
        Flight::render('./pages/liste-email.tpl', $tab);
    });

    Flight::route('GET /salles', function(){
        $pdo = Flight::get('pdo'); 

        if (isset($_GET['salledel'])) {  
            $salleDel = $_GET['salledel']; 
            $deleteSalle = $pdo->prepare("delete from salle where num_salle = '$salleDel'");
            $deleteSalle->execute(); 
        } 

        $salle = getSalle();

        $tab = array('_SESSION' => $_SESSION, 'salle' => $salle);
        Flight::render('./pages/salles.tpl', $tab);
    });

    Flight::route('POST /salles', function(){
        $pdo = Flight::get('pdo'); 
        $error = array();

        $nom = $_POST['nom'];
        $capacite = $_POST['capacite'];

        $checkexist = $pdo->prepare("select * from salle where nom = '$nom'");
        $checkexist->execute(); 
        $result = $checkexist->fetch(PDO::FETCH_ASSOC);

        if(!($result)){
            $insertsalle = $pdo->prepare("insert into salle (nom,capacite) values ('$nom','$capacite')");
            $insertsalle->execute(); 
            Flight::redirect("/salles");
        }else{
            $error[] = 'salle déjà existante !';
        }

        $salle = getSalle();

        $tab = array('_SESSION' => $_SESSION, 'error' => $error, 'salle' => $salle);
        Flight::render('./pages/salles.tpl', $tab);
    });

    Flight::route('GET /matieres', function(){
        $pdo = Flight::get('pdo'); 

        if (isset($_GET['matieredel'])) {  
            $matiereDel = $_GET['matieredel']; 
            $deleteMatiere = $pdo->prepare("delete from matiere where num_matiere = '$matiereDel'");
            $deleteMatiere->execute(); 
        } 

        $matiere = getMatiere();

        $tab = array('_SESSION' => $_SESSION, 'matiere' => $matiere);
        Flight::render('./pages/matieres.tpl', $tab);
    });

    Flight::route('POST /matieres', function(){
        $pdo = Flight::get('pdo'); 
        $error = array();

        $nom = $_POST['nom'];

        $checkexist = $pdo->prepare("select * from matiere where nom = '$nom'");
        $checkexist->execute(); 
        $result = $checkexist->fetch(PDO::FETCH_ASSOC);

        if(!($result)){
            $insertmatiere = $pdo->prepare("insert into matiere (nom) values ('$nom')");
            $insertmatiere->execute(); 
            Flight::redirect("/matieres");
        }else{
            $error[] = 'matière déjà existante !';
        }

        $matiere = getMatiere();

        $tab = array('_SESSION' => $_SESSION, 'error' => $error, 'matiere' => $matiere);
        Flight::render('./pages/matieres.tpl', $tab);
    });

    Flight::route('GET /EDTedit', function(){
        $tab = array('_SESSION' => $_SESSION);

        Flight::render('./pages/EDTedit.tpl', $tab);
    });
?>