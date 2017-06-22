<?php
session_start();

include 'login_form.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Grepo Forum</title>
    <link rel="stylesheet" type="text/css" href="../css/inlog.css"
</head>
<body>
<section class="loginform">
    <div class="loginface"><img src="../img/gebruikerlogo.png"></div>
    <?php if (!empty($message)):?>
    <p class="errormessage"><?= $message ?></p>
    <?php endif ?>
    <form method="post">
        <div class="input uname">
            <input type="text" name="username" id="username" placeholder="Gebruikersnaam"/>
        </div>
        <div class="input pass">
            <input type="password" name="password" id="password" placeholder="Wachtwoord"/>
        </div>
        <a href="#" style="float:right;color:gray;font-size:14px;text-decoration:none;
			font-family:san-serif,Arial;margin-bottom:10px;">Wachtwoord vergeten?</a>
        <p class="error-msg">Verkeerde gegevens</p>
        <div>
            <input type="submit" id="login" name="login" value="Log in"  />
        </div>
    </form>
</section>
</body>
</html>
