<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 24/11/2017
 * Time: 23:33
 */
class Database
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
}