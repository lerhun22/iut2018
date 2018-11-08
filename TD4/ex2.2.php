<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>M3104 TD3 Ex2.2</title>
		<meta charset="utf-8"/>
	</head>
<body>
<h1>TD3 Session - ex2.2</h1>
<?php
	$id="Seb";
	$mdp="Hongepass";
	//echo "isset".isset($_POST['deconnexion']);
	if(isset($_POST['deconnexion'])){
		$_SESSION["connecte"]=false;
	}
	if($_SESSION["connecte"]){
		echo "Connecte";
		echo'<form method="post" action="ex2.2.php">';
		echo'<input type="submit" name="deconnexion" value="Deconnecter">';
		echo'</form>';
	}
	else{
		if($_POST["login"]==$id && $_POST["pwd"]==$mdp){
			$_SESSION["connecte"]=true;
			echo "Bienvenue ".$_POST["login"];
			echo'<form method="post" action="ex2.2.php">';
			echo'<input type="submit" name="deconnexion" value="Deconnecter">';
			echo'</form>';
		}
		else{
			echo "<p>Identification :</p>";
			echo'<form method="post" action="ex2.2.php">';
			echo'	Login: <input type="text" name="login"/>';
			echo'	Pwd: <input type="text" name="pwd"/>';
			echo'	<input type="submit" value="Valider">';
			echo'</form>';
		}
	}	
?>
</body>
</html>
