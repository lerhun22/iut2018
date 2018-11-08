<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>TP4 : Les sessions</title>
    <style>
        body{
            background-color : <?php echo $_COOKIE['colorBack'];?>;
            color : <?php echo $_COOKIE['colorText'];?> ;
        }
    </style>
</head>
<body>

<div class="container">
    <div class='row'>
        <?php
            /**
             * Verification de connexion sinon redirection
             */
            if(isset($_SESSION['login'])){
                echo "<div class='alert alert-success mt-2 col-md-10'>Connexion réussi ! Bonjour ".$_SESSION['login'].'.</div>';
                echo "<form method='post' action='index.php' class='col-md-2'><button class='btn btn-outline-danger my-2' name='deconnexion'>Deconnexion</button></form>";   
            }
            else{
                //header('Location: index.php');
            }
        ?>
    </div>
</div>

<div class="container">
    <h1>Chercher les collaborateurs</h1>
    <form action="#" method="post"> <!-- LE FORM EST TRAITEE PAR LE CONTROLLEUR -->
        <select name='selectedProf'>
        <?php
            foreach($profs as $p){
                if(!in_array($p['num'], $_SESSION['deletedProfs'])){
                    echo "<option value='".$p['num']."'>".$p['nom'].'</option>';
                }
            }
        ?>
        </select>
        <button type='submit' class='btn btn-primary col-md-2'>Voir les collaborateurs</button>
    </form>

    <table class="table mt-3">
        <tr><th>Num</th><th>Nom</th><th>Prenom</th></tr>
    <?php

    if (!empty($collab)){
        foreach($collab as $c){ // On récupère collabs depuis le controlleur
            echo '<tr><td>'.$c['num'].'</td><td>'.$c['nom'].'</td><td>'.$c['prenom'].'</td></tr>';
        }
    }
    ?>
</div>