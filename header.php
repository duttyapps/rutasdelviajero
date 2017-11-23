<?php
include 'config/configuration.php';
include 'classes/MysqliDb.php';
include 'lib/header.class.php';

$db = new MysqliDb($database->host, $database->username, $database->password, $database->db);
$menu = new header($db);
?>
<!doctype html>
<html lang="es">
<head>
    <title>Las Rutas del Viajero</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/common.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./assets/img/logo-small.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <?php
                foreach ($menu->getListMenu() as $key) {
                    echo '<li class="nav-item">';
                    if($key["ID_PADRE"] == null) {
                        echo '<a class="nav-link" href="'.$key["LINK"].'">'.$key["TITULO"].'</a>';
                    }
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>