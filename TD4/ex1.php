<?php
	session_start();
	if(!$_SESSION["nb"]){
		$_SESSION["nb"]=1;
	}
	else{
		$_SESSION["nb"]++;
		echo $_SESSION["nb"];
	}
	if(!isset($_SESSION["debut"])){
		$_SESSION["debut"]=time();
	}
	$temps=time()-$_SESSION["debut"];
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>M3104 TD3 Ex1</title>
		<meta charset="utf-8"/>
	</head>
<body>
	<h1>TD3 Session - ex1</h1>
	<p>Nb visites :</p>
	<?php echo $_SESSION["nb"]; ?>
	<p>Temps ecoule depuis premiere visite :</p>
	<?php echo $temps; ?>
</body>
</html>

