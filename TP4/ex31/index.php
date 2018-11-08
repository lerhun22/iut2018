<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>TP4 : Les sessions</title>
</head>
<body>
    <h1>TP4 : Les sessions </h1>

    <hr />
    
    <?php

    //echo isset($_SESSION['connecte']) . "<br>";
    //print_r ($_SESSION);

    $user="DF";
    $mdp="DF";

    if (isset($_SESSION['connecte']) && $_SESSION['connecte']==true) {
        echo 'Bienvenue' . $_SESSION['user'] . "<br>";

    }else{
        if (isset($_POST['login']) && isset($_POST['mdp']) && $_POST['login'] == $user && $_POST['mdp'] == $mdp  ){
            $_SESSION['connecte'] = true;
            $_SESSION['user']=$_POST['login'];
        }else{
            ?>

            <form action="index.php" method="post">
                <div class="form-group row">
                    <div class="col-xs-3">
                        <label for="idlogin">Login</label>
                        <input class="form-control" id="idlogin" type="text" name ="login">
                    </div>
                    <div class="col-xs-3">
                        <label for="idmdp">Password</label>
                        <input class="form-control" id="idmdp" type="password" name ="password">
                    </div>
                </div>
 
                <button type="submit" style="with: 150px; float: right" class="btn btn-primary mb-3">Connexion</button>
            </form>
            <?php
        }
    }

    ?>
     <!-- BOOTSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>