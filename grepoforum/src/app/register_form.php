<?php

require 'dbconnectie.php';

$message = null;

if (isset($_POST['register'])) {
    $username = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $confirm_password = htmlentities($_POST['confirm_pwd']);

    if (!$username || !$email || !$password || !$confirm_password) {
        $message = "Alle velden zijn verplicht!";
    } elseif ($password != $confirm_password) {
        $message = "De wachtwoorden komen niet overeen";
    } else {
        $statement = $conn->prepare("SELECT * FROM users WHERE username = :username AND email = :email");
        $statement->execute([
            ':username' => $username,
            ':email' => $email
        ]);
        if ($statement->rowCount() > 0) {
            $message = "De ingevulde username is al in gebruik.";
        } else {
            $statement = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $statement->execute([
                ':username' => $username,
                ':password' => hash("SHA512", $password),
                ':email' => $email
            ]);
            header("location: index.php");
        }
    }

}
?>