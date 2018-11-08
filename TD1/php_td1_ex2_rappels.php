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
        <h3>Rappels</h3>
        <h4>Boucle for</h4>
        <?php
            for($i=0;$i<10;$i++){
                echo $i;
            }
        ?>
        <h4>Tableau</h4>
        <?php
            $montableau=array('valeur1',2);
            echo count($montableau);
            echo"<p>for i</p>";
            for($i=0;$i<count($montableau);$i++){
                echo "<p>$montableau[$i]</p>";
            }
            echo"<p>foreach</p>";
            foreach($montableau as $key => $value){
                echo "<p>$value</p>";
            }
        ?>
        <h4>Liste</h4>
        <ol>
            <li>element1</li>
            <li>element2</li>
        </ol>
    </body>
</html>