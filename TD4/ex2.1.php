<?php
	session_start();
	$_SESSION["connecte"]="";
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>M3104 TD3 Ex2.1</title>
		<meta charset="utf-8"/>
	</head>
<body>
<h1>TD3 Session - ex2.1 - DF</h1>
<?php
	$id="DF";
	$mdp="DF";
	if($_SESSION["connecte"]){
		echo "Connecte";
	}
	else{
		if($_POST["login"]==$id && $_POST["pwd"]==$mdp){
			$_SESSION["connecte"]=true;
			echo "Bienvenue ".$_POST["login"];
		}
		else{
			echo "<p>Identification :</p>";
			echo'<form method="post" action="ex2.1.php">';
			echo'	Login: <input type="text" name="login"/>';
			echo'	Pwd: <input type="text" name="pwd"/>';
			echo'	<input type="submit" value="Valider">';
			echo'</form>';
			echo'<form method="post" action="ex2.php">';
			echo'</form>';
		}
	}		
?>
</body>
</html>

