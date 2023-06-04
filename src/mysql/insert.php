<?php

// insertion d'élément dans la base de donnée
function insertSQL($table, $field1, $field2, $val1, $val2) 
{
    // récupération fichier query pour envoi requête
    require_once "src/" . "mysql/" . "query.php";

    // requête sql à executer
    $req = "INSERT INTO $table ($field1, $field2) VALUES ('$val1', '$val2');";

    // exécution de la requête
    $resp = querySQL($req);
} 