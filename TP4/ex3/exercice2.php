<?php
/**
* FICHIER CONTROLLEUR
*/
    if(!isset($_SESSION['deletedProfs'])){
        echo "SESSION crée";
        $_SESSION['deletedProfs'] = array();
    }
    else{
        //var_dump($_SESSION['deletedProfs']);
    }
    
    include('Model.php');

    $db = connectDb();
    $profs = getAllProfs($db);
    
    /** 
     * Gestion des profs
     */
    if(isset($_POST['selectedProf'])){
       $collab = getCollabFrom($_POST['selectedProf'], $db);
       array_push($_SESSION['deletedProfs'], $_POST['selectedProf']);
    }
    
    include('Vue.php');
?>