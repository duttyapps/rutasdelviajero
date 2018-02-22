<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 13/12/2017
 * Time: 00:04
 */
include '../../config/configuration.php';
include '../../lib/database.class.php';
include '../../lib/locations.class.php';

$locations = new Locations($db);

print_r($locations->getListLocations('lima'));