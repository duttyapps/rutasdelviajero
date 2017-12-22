<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 23/11/2017
 * Time: 00:21
 */
$database = new stdClass();
$database->host = 'localhost';
$database->username = 'root';
$database->password = 'carlitos';
$database->db = 'rutas';

if(file_exists('classes/MysqliDb.php')) {
    include 'classes/MysqliDb.php';
} else {
    include '../../classes/MysqliDb.php';
}
$db = new MysqliDb($database->host, $database->username, $database->password, $database->db);