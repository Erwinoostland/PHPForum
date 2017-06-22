<?php

require 'dbconnectie.php';

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password){
        $message = 'Beide velden zijn verplicht!';
    } else {
        $statement = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $statement->execute([
            ':username' => $username,
            ':password' => hash("SHA512", $password)
        ]);
        if($statement->rowCount() > 0) {
            $row = $statement->fetch();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("location: index.php");
        } else {
            $message = "Gebruikersnaam of wachtwoord is onjuist";
        }
    }
}
?>