<?php
    function connectDb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=iut;', 'root', 'root');
        }
        catch(Exception $e){
            die("Erreur connexion BDD");
        }
        return $db;
    }

    function getAllProfs(PDO $db){
        $query = "SELECT num, prenom, nom FROM profs";
        $reponseDB = $db->query($query);
        return $reponseDB->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCollabFrom($selectedProf, $db){
        $rep = $db->prepare("SELECT DISTINCT P.num, P.nom, P.prenom 
        FROM profs as P INNER JOIN enseigne AS E ON P.num = E.idprof 
        WHERE E.idmat IN (SELECT idmat FROM enseigne WHERE idprof = ?) AND P.num != ?;");
        $rep->execute(array($selectedProf, $selectedProf));
       // print_r($rep->fetchAll(PDO::FETCH_ASSOC));
        return $rep->fetchAll(PDO::FETCH_ASSOC);
    }

    function getMatiereFrom($selected, $db){
        $rep = $db->prepare("SELECT idmat FROM enseigne WHERE idprof = ?");
        $rep->execute(array($selectedProf));
        $tabMat = array();
        print_r($rep->fetchAll(PDO::FETCH_ASSOC));
        return $rep->fetchAll(PDO::FETCH_ASSOC);
    }
?>