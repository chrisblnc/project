<?php

// fonction executant des requêts sql
function querySQL($req) 
{
    // récupération fichier connexion sql
    require_once "src/" . "mysql/" . "connect.php";

    // connexion à mysql
    $conn = connectSQL();

    // envoie requête sql
    $resp = $conn->query($req);

    // fermeture connexion mysql
    $conn = null;

    // retourne reponse à la requête
    return $resp;
}