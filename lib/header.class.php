<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 22/11/2017
 * Time: 22:31
 */
class header
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getListMenu() {
        $cols = Array ("ID", "TITULO", "ID_PADRE", "LINK");
        $this->db->orderBy("PRIORIDAD","ASC");
        return $this->db->get("header_menu", null, $cols);
    }
}