<?php

/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 24/11/2017
 * Time: 23:31
 */

class Adversiting extends Database
{
    public function getAdsSlider() {
        $cols = Array ("ID", "TITULO", "TIPO", "LINK");
        $this->db->orderBy("PRIORIDAD","ASC");
        $this->db->where("TIPO","1");
        return $this->db->get("adversiting", null, $cols);
    }

    public function getAdBottom() {
        $cols = Array ("ID", "TITULO", "TIPO", "LINK", "TARGET");
        $this->db->where("TIPO","2");
        return $this->db->getOne("adversiting", $cols);
    }
}