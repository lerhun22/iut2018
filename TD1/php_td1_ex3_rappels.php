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
        <h2>Ex3</h2>
        <h3>Rappels</h3>
        <h4>Déclaration élément par élément</h4>
        <?php
            $tabas['cle1']='valeur1';
            $tabas['cle2']='valeur2';
            foreach($tabas as $key => $value){
                echo "<p>$key -> $value</p>";
            }
        ?>
        <h4>Déclaration array</h4>
        <?php
            $tabasar=array('arcle1'=>'arvaleur1','arcle2'=>'arvaleur2');
            foreach($tabasar as $arkey => $arvalue){
                echo "<p>$arkey -> $arvalue</p>";
            }
        ?>
        <h4>Tableau de tableaux</h4>
        <?php
            $tab1=array('ct11'=>'vt11','ct12'=>'vt12');
            $tableaux=array('tab1'=>$tab1,'tab2'=>array('ct21'=>'vt21','ct22'=>'vt22'));
            foreach($tableaux as $cle => $tab){
                foreach($tab as $cle => $val){
                    echo"<p>$cle : $val</p>";
                }
            }
        ?>
        <h4>Liste ordonnées</h4>
        <ul>
            <li>element1</li>
            <li>element2</li>
        </ul>
    </body>
</html>