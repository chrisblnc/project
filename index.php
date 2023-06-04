<?php
// récupération de la config
$_conf = parse_ini_file("src/config/web.conf");

// mode dev
$_dev = $_conf['dev'];
// titre du site
$_title = $_conf['title'];

// récupération de l'instant T
$_now = new DateTime('now', new DateTimeZone('Europe/Paris'));

// titre de la page
$title = "Accueil";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " | " . $_title?></title>
</head>
<body>
    <style>
        /* thème sombre */
        html {
            background-color: #212128;
            color: #CCC;
        }
    </style>
    <?php
    // mode dev
    if ($_dev) {
        echo "dev mod : " . $_now->format('Y-m-d H:i:s') . "</br>";

        // test unitaire
        require "tests/unit/" . "init" . "_unit_test.php";
    }
    ?>
</body>
</html>