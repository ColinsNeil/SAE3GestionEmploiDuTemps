<?php
    $dbname = "edt_manager";
    $server = "localhost";
    $port = "3306";
    $user = "UtilisateurPHP";
    $pwd = "A!VjQRd.gdUiLyXE";

    try {
        $pdo = new PDO("mysql:host=$server;port=$port;dbname=$dbname;charset=utf8",$user,$pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . "<br/>";
    }
?>