<?php
// fichier à tester
const file = "src/" . "mysql/" . "select.php";

// require file
require_once file;

// constante contenant la table (!) à modifier
const table = "";

// récupération de la table
$tab = selectSQL(table);

// récupération des éléments de la table
foreach ($tab as $t) {
    echo $t;
}