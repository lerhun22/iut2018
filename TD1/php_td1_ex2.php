<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Basic HTML Template</title>
        <meta charset="UTF-8">
        <meta name="description" content="Template to build HTML5/CSS3 pages">
        <meta name="keywords" content="HTML, CSS, XML, JavaScript">
        <meta name="author" content="Laurent d'Orazio">
    </head>
    <body>
        <h1>m3104 Web Serveur TD1</h1>
        <h2>Ex2</h2>
        <?php
            $jours=array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
            echo "<ol>";
            foreach($jours as $key => $value){
                echo "<li>$value</li>";
            }
            echo "</ol>";
        ?>
    </body>
</html>