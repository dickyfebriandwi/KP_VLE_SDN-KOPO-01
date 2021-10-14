<?php
class Materi_model extends CI_model
{
    public function getAllMateri()
    {
        return $this->db->get('materi')->result_array();
    }
}