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
        <h2>Ex4</h2>
        <h3>Solutions</h3>
        <h4>q1</h4>
        <?php
            $questionnaire=array(
                1=>array('bataille'=>'Marignan','dates'=>array(1515,1415,1532,1453),'reponse'=>1515),
                2=>array('bataille'=>'Waterloo','dates'=>array(1832,1615,1815),'reponse'=>1815),
                3=>array('bataille'=>'Azincourt','dates'=>array(1432,1415,1815,1665,1789),'reponse'=>1415),
            );
            $b=4;
        ?>
        <h4>q2</h4>
        <?php
        /*$ligne1=$questionnaire[1];
        $datesligne=$ligne1['dates'];
        echo $troisemeData=$datesligne[2];*/
        echo $questionnaire[1]['dates'][2];
        ?>
        <h4>q3</h4>
        <?php
        //version instructions
        $question=2;
        echo"<p>En quelle annee s'est deroulee la bataille de ".$questionnaire[$question]['bataille']." : <p>";
        foreach($questionnaire[$question]['dates'] as $cle => $valeur){
            echo "<p>$valeur</p>";
        }
        echo"<p>?</p>";
        //version procédure
        function afficherQuestion($rang){
            global $questionnaire;
            echo '<p>Date de la bataille de : ';
            //echo $GLOBALS['questionnaire'][$rang]['bataille'];
            echo $questionnaire[$rang]['bataille'].'</p>';
            echo '<p> Possibilités :' ;
            //foreach($GLOBALS['questionnaire'][$rang][dates] as $cle => $element){
            foreach($questionnaire[$rang][dates] as $cle => $element){
                echo $element." ";
            }
            echo'</p>';
        }
        afficherQuestion(1);        
        ?>
    </body>
</html>