<?php

$dsn = 'mysql:dbname=ouitransfer;charset=utf8;host=localhost';
$user = 'root';
$password = '';
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}