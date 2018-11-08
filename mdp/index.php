<?php
session_start();
?>
<!DOCTYPE=html>
<html> 
<head>
    <title>Login</title>
</head>
<body>
    <?php
        $user = "DF";
        $mdp="DF";
        if (isset($_SESSION['ouverte']) && $_SESSION['ouverte'] == true){
            echo "session connectée <br>" ;
            
            echo "Vous êtes connecté " . $_SESSION['user'] . "<br>";

            echo "<p>Déconnexion :</p>";
            echo'<form method="post" action="fermeture.php">';
            echo'	<input type="submit" value="Fermeture">';
            echo'</form>';

        }else{
            if ( (isset($_POST['login']) && $_POST['login'] == $user ) && (isset($_POST['mdp']) && $_POST['mdp'] == $mdp )     ){
                $_SESSION['ouverte'] = true;
                echo "session connectée <br>" ;
                $_SESSION['user']=$_POST['login'];  
                echo "bienvenue " . $_SESSION['user'] . "<br>";             
            }else{
                echo "<p>Identification :</p>";
                echo'<form method="post" action="index.php">';
                echo'	Login: <input type="text" name="login"/>';
                echo'	Pwd: <input type="text" name="mdp"/>';
                echo'	<input type="submit" value="Valider">';
                echo'</form>';
            }
        }
    ?>
</body>
</html>