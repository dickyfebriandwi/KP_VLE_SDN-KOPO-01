<?php
class Tugas_model extends CI_model
{
    public function getTugas()
    {
        return $this->db->get('tugas')->result_array();
    }
    public function getTugasById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('tugas');
    }
}
