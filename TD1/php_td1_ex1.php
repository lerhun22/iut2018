<?php
$nom='Flury';
$prenom='Didier';
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Basic HTML Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Template to build HTML5/CSS3 pages">
    <meta name="keywords" content="HTML, CSS, XML, JavaScript">
    <meta name="author" content="Didier Flury">
</head>
<body>
    <h1>m3104 Web Serveur TD1</h1>
    <h2>Ex1</h2>
    <hr/>
    <p>
       <b>Nom :</b> 
       <i><?php echo $nom; ?></i>
       <b>Prénom :</b> <i><?php echo $prenom; ?></i><br/>
   </p>
   <hr/>
</body>
</html>
