<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 22/11/2017
 * Time: 22:31
 */

class Header extends Database
{
    public function getListMenu() {
        $cols = Array ("ID", "TITULO", "LINK");
        $this->db->where("ID_PADRE", NULL, "IS");
        $this->db->orderBy("PRIORIDAD","ASC");
        return $this->db->get("header_menu", null, $cols);
    }

    public function getListSubMenu($id_padre) {
        $cols = Array ("ID", "TITULO", "ID_PADRE", "LINK");
        $this->db->where("ID_PADRE", $id_padre);
        $this->db->orderBy("PRIORIDAD","ASC");
        return $this->db->get("header_menu", null, $cols);
    }
}