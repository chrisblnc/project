<?php

// connexion à la base de donnée
function connectSQL() 
{
    // récupération de la var global $_dev
    global $_dev;

    // récupération du fichier de config
    $conf = parse_ini_file("src/" . "config/" . "mysql.dev.conf");

    // récupération des paramètres
    $hostMySQL = $conf['host'];
    $userMySQL = $conf['user'];
    $passMySQL = $conf['pass'];
    $nameMySQL = $conf['name'];

    // essaie de connexion
    try {
        // connexion
        $conn = new PDO("mysql:host=$hostMySQL;dbname=$nameMySQL", $userMySQL, $passMySQL);
        // set attribut pour exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($_dev)
            echo "connection succeeded" . "</br>";
        return $conn;
    } catch(PDOException $e) {
        if ($_dev)
            echo "error: " . $e->getMessage() . "</br>";
        return false;
    }
}