<?php
$module = $_GET['op'];

if(empty($module)) {
    $module = 'main';
}

include "views/$module/app.php";