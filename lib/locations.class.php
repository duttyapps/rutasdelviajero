<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 12/12/2017
 * Time: 23:11
 */
class Locations extends Database
{
    public function getListLocations($query) {
        $cols = "UCASE(CONCAT(IF(AEROPUERTO IS NULL, NULL, CONCAT('Aeropuerto ', AEROPUERTO, ', ')), CIUDAD_ESP, ', ', PAIS_ESP)) AS LOCATION";
        $queryed = $query . '%';
        $this->db->where("AEROPUERTO", $queryed, "LIKE");
        $this->db->where("CIUDAD_ENG", $queryed, "LIKE");
        $this->db->where("CIUDAD_ESP", $queryed, "LIKE");
        $this->db->where("PAIS_ENG", $queryed, "LIKE");
        $this->db->where("PAIS_ESP", $queryed, "LIKE");

        return $this->db->get("locations", null, $cols);
    }
}