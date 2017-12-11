<?php
include 'config/configuration.php';
include 'lib/database.class.php';
include "lib/configuration.class.php";
$commons = new Configuration($db);
if($commons->isActive() == false) exit("Volvemos pronto...");
include 'lib/adversiting.class.php';
$ad = new Adversiting($db);
include "header.php";
include "app.php";
include "footer.php";