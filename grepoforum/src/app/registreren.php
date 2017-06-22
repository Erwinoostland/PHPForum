<?php

include 'register_form.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Grepo Forum</title>
    <link rel="stylesheet" type="text/css" href="../css/registreren.css"
</head>
<body>
<section class="registratieform">
    <div class="loginface"><img src="../img/gebruikerlogo.png"></div>
    <?php if (!empty($message)):?>
        <p class="errormessage"><?= $message ?></p>
    <?php endif ?>
    <form method="post">
        <div class="input uname">
            <input type="text" name="username" id="username" placeholder=" Gebruikersnaam"/>
        </div>
        <div class="input email">
            <input type="email" name="email" id="email" placeholder="Email"/>
        </div>
        <div class="input pass">
            <input type="password" name="password" id="password" placeholder="Wachtwoord"/>
        </div>
        <div class="input pass">
            <input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Wachtwoord"/>
        </div>
        <div>
            <input type="submit" id="register" name="register" value="Registreer"  />
        </div>
    </form>
</section>
</body>
</html>
