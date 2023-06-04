<?php

// récupération des valeurs dans la base de données
function selectSQL($table) 
{
    // récupération fichier query pour envoi requête
    require_once "src/" . "mysql/" . "query.php";

    // requête sql à executer
    $req = "SELECT * FROM $table";

    // réception de la réponse
    $resp = querySQL($req)->fetchAll();

    // retourne le résultat
    return $resp;
}