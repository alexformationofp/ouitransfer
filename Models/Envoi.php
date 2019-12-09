<?php

require "Models/Connexion.php";

function ajouterTransfert ($chemin){
    global $dbh;
    $ajoutChemin = $dbh->prepare('INSERT INTO envoi (chemin) VALUES (:lien);');
    $ajoutChemin->execute([
        'lien' => $chemin,
    ]);
};
