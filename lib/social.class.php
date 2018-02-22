<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 27/11/2017
 * Time: 02:03
 */
class Social extends Database
{
    public function getSocialsNetworks() {
        $cols = Array ("ID", "NOMBRE", "LINK", "ACTIVO");
        return $this->db->get("social_links", null, $cols);
    }

    public function getActiveSocialsNetworks() {
        $cols = Array ("ID", "NOMBRE", "LINK", "ACTIVO");
        $this->db->where("ACTIVO","1");
        return $this->db->get("social_links", null, $cols);
    }
}