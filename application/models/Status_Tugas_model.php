<?php
class Status_Tugas_model extends CI_model
{
    public function getStatusTugas()
    {
        return $this->db->get('status_tugas')->result_array();
    }
    public function getStatusTugasById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('tugas');
    }

    function insertStatusTugas($data)
    {
        return $this->db->insert("tugas", $data);
    }
}