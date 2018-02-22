<?php
include 'lib/header.class.php';

$menu = new Header($db);
?>
<!doctype html>
<html lang="es">
<head>
    <title><?php echo $commons->getTitle(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/externals/animate.css">
    <link rel="stylesheet" href="./assets/css/externals/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="./assets/css/common.css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="assets/js/externals/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/externals/locale/bootstrap-datepicker.es.min.js"></script>
    <script src="assets/js/externals/bootstrap3-typeahead.min.js"></script>
    <script src="assets/js/externals/wow.min.js"></script>
    <script src="assets/js/all.js"></script>
</head>
<body>
<!--div id="top-contact" class="hidden-xs">
    <div class="container-fluid">
        &nbsp;
    </div>
</div-->
<nav class="navbar navbar-rutas">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo-small.png" class="wow rubberBand">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-center wow fadeIn">
                <?php
                foreach ($menu->getListMenu() as $key) {
                    $submenu = $menu->getListSubMenu($key["ID"]);
                    $is_dropdown = (count($submenu) > 0) ? true : false;
                    echo '<li' . (($is_dropdown) ? ' class="dropdown"' : '') . '>';
                    echo '<a ' . (($is_dropdown) ? 'class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' : '') . 'href="' . $key["LINK"] . '">' . $key["TITULO"] . '</a>';
                    if($is_dropdown) {
                        echo '<ul class="dropdown-menu">';
                        foreach ($submenu as $subkey) {
                            echo '<li><a href="'. $subkey['LINK'] .'">'. $subkey['TITULO'] .'</a></li>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<div class="bar-header">
    <div class="bar-col-1"></div>
    <div class="bar-col-2"></div>
    <div class="bar-col-3"></div>
</div>