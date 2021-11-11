<?php
class Kuis_model extends CI_model
{
    public function getAllKuis()
    {
        return $this->db->get('kuis')->result_array();
    }
}
