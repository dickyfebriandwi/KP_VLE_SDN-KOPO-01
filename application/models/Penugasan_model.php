<?php
class Penugasan_model extends CI_model
{
    public function getAllPenugasan()
    {
        return $this->db->get('penugasan')->result_array();
    }
}
