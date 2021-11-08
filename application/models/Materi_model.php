<?php
class Materi_model extends CI_model
{
    public function getAllMateri()
    {
        return $this->db->get('materi')->result_array();
    }
    function insertMateri($data)
    {
        return $this->db->insert("materi", $data);
    }
    function getMateriById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('materi');
    }
}
