<?php
session_start();
?>
<!DOCTYPE=html>
<html> 
<head>
    <title>Fermeture session</title>
</head>
<body>
<?php
    echo "Vous êtiez connecté " . $_SESSION['user'] . "<br>";
    print_r($_SESSION);
    session_destroy();
?>
</body>
</html>