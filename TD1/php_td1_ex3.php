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
        <h3>Q1</h3>
        <?php
            //version 1 par 1
            $menu1['Entrée']='Carottes râpées';
            $menu1['Plat']='Palette à la Diable';
            $menu1['Dessert']='Café liégeois';
            $menu1['Café']='False';
            //version array
            $menu1=array('Entrée'=>'Carottes râpées',
                'Plat'=>'Palette à la Diable',
                'Dessert'=>'Café liégeois',
                'Café'=>'False');
        ?>
        <h3>Q2</h3>
        <?php
            echo "<ul>";
            foreach($menu1 as $key1 => $value1){
                echo "<li>$key1 : $value1</li>";
            }
            echo "</ul>";
        ?>
        <h3>Q3</h3>
        <?php
            $menus=array('m1'=>$menu1,'m2'=>array('Entrées'=>'Salade','Plat'=>'Lasagnes','Dessert'=>'Tiramisu','Café'=>'True'));
        ?>
        <h3>Q4</h3>
        <?php
            echo "<ul>";
            foreach($menus as $cle => $tab){
                echo "<li>Menu $cle</li>";
                echo "<ul>";
                foreach($tab as $cle => $val){
                    echo"<li>$cle : $val</li>";
                }
                echo "</ul>";
            }
            echo "</ul>";
        ?>
    </body>
</html>