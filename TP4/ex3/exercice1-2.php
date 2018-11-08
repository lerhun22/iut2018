<div class="container">

<h2>Exercice 1 / 2:</h2>

<?php
$_SESSION['nbVisites'] = 0;
    if(isset($_POST['deconnexion'])) {
        $_SESSION['nbVisites'] = 0;
        session_destroy();
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Deconnexion effectuée, à bientôt !";
        echo "</div>";
    }
    
    if (!isset($_SESSION['nbVisites'])){
        $_SESSION['nbVisites'] = 1;
    }
    else{
        $_SESSION['nbVisites']++;
    }
    echo 'Nombre de visite en Session : '.$_SESSION['nbVisites'];

?>

<hr/>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Identifiant</label>
            <input type="text" name="login" class="form-control" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" style="with: 150px; float: right" class="btn btn-primary mb-3">Connexion</button>
    </form>
    <?php
    
    $users_allowed = array(
        'Didier' => 'mdp',
    );

    if(isset($_POST['login']) && isset($_POST['password'])){
        $login = $_POST['login'];
        $pass = $_POST['password'];

        echo $login . "<br>";
        echo $pass . "<br>";
        print_r($users_allowed);

        echo "statut isset isset($users_allowed[$login])" . isset($users_allowed[$login]) . "<br>";

        if($users_allowed[$login] == $pass){
            $_SESSION['login'] = $login;
            echo "<div class='alert alert-success'>Connexion réussie ! Bonjour ".$_SESSION['login'].'.</div>';
        }
        else{
            echo "<div class='alert alert-danger'>Echec d'authentification, login ou mot de passe incorrect ! </div>";
            echo "<a href='index.php'>Revenir à la connexion</a>";
        }
    }

?>
</div>