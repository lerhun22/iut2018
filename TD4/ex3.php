<?php
	session_start();
	/*session_unset($_SESSION["fond"]);
	session_unset($_SESSION["police"]);
	$_POST["fond"]=false;
	$_POST["police"]=false;*/
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>M3104 TD3 Ex3</title>
		<meta charset="utf-8"/>
	</head>
<body>
<h1>TD3 Session - ex3</h1>
<form method="post" action="ex3.php">
Police : <input type="text" name="fond"/>
Fond : <input type="text" name="police"/>
<input type="submit" value="Valider">
</form>
<?php
	if(!$_SESSION["fond"]&&!$_SESSION["police"]){
		if($_POST["fond"]&&$_POST["police"]){
			$_SESSION["fond"]=$_POST["fond"];
			$_SESSION["police"]=$_POST["police"];
			echo "<p>Couleurs enregistrees !</p>";
			echo "SESSION de fond : ".$_SESSION["fond"];
			echo "SESSION de police : ".$_SESSION["police"];
			echo '<form method="post" action="ex3_accueil.php">';
			echo '<input type="submit" value="Visualiser">';
			echo '</form>';
		}
	}
?>
</body>
</html>

