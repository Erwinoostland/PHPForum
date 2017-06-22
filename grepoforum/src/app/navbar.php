<?php

include 'login_form.php';

if (isset($_SESSION['loggedin'])){
    $navbar = "<li style=\"float:right\"><a href=\"#\">Uitloggen</a></li>
        <li style=\"float:right\"><a href=\"#\">Mijn profiel</a></li>";
} else {
    $navbar = "<li style=\"float:right\"><a href=\"inlog.php\">Inloggen</a></li>
        <li style=\"float:right\"><a href=\"registreren.php\">Registreren</a></li>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Grepo Forum</title>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css"
</head>
<body>

<!--Begin van de navbar-->
<header>
    <img src="../img/banner1.jpg" width="100%">
    <ul>
        <li><a href="#">Home</a></li>
        <?= $navbar ?>
    </ul>
</header>
</body>
</html>