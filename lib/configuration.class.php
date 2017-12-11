<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 25/11/2017
 * Time: 00:49
 */

class Configuration extends Database
{
    public function isActive() {
        $this->db->where("ID","1");
        $activo = $this->db->getValue("configuration", "ACTIVO");

        if($activo == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function getTitle() {
        $this->db->where("ID","1");
        return $this->db->getValue("configuration", "TITULO");
    }

    public function getEmail() {
        $this->db->where("ID","1");
        return $this->db->getValue("configuration", "EMAIL_CONTACT");
    }
}