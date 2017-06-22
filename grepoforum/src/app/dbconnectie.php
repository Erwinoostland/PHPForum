<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'toor';

try {
    $conn = new PDO('mysql:host=localhost;dbname=forum_grepo', $username, $password);
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>