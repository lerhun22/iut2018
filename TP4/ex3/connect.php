<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>TP4 : Connexion</title>
</head>
<?php
    $users_allowed = array(
        'clement' => 'azertyuiop',
        'alexis' => 'php',
        'erwan' => 'hello',
        'thomas' => 'lundi'
    );


    if(isset($_POST['login']) && isset($_POST['password'])){
        $login = $_POST['login'];
        $pass = $_POST['password'];

        if($users_allowed[$login] == $pass){
            $_SESSION['login'] = $login;

            echo "<div class='alert alert-success'>Connexion réussi ! Bonjour ".$_SESSION['login'].'.</div>';
            echo "<form method='post' action='index.php'><button class='btn btn-outline-danger my-2' name='deconnexion'>Deconnexion</button></form>";

        }
        else{
            echo "<div class='alert alert-danger'>Echec d'authentification, login ou mot de passe incorrect ! </div>";
            echo "<a href='index.php'>Revenir à la connexion</a>";
        }
    }
    else {
        echo "<div class='alert alert-danger'>Echec d'authentification, vous n'avez pas entrez de login ou mot de passe ! </div>";
        echo "<a href='index.php'>Revenir à la connexion</a>";
    }
?>