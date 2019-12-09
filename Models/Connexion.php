<?php
require "env.php";


try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    // $dbh = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}