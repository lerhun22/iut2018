<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>M3104 TD2 Ex3 accueil</title>
		<meta charset="utf-8"/>
	</head>
<body>
<h1>TD3 Session - ex3</h1>
<?php
if ( isset($_SESSION['police'])    &&  isset($_SESSION['fond'])    ){
$s="<p style='color:".$_SESSION['police'].";background:".$_SESSION['fond']."'>Test</p>";
echo "$s";
}
?>
</body>
</html>

