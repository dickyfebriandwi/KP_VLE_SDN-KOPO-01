<?php
class Status_kuis_model extends CI_model
{
    public function getStatusKuis()
    {
        return $this->db->get('status_kuis')->result_array();
    }

    public function getStatusKuisByKelas($id)
    {
        $this->db->where("kelas_id", $id);
        return $this->db->get("status_kuis");
    }

    public function getStatusKuisByKuis($id)
    {
        $this->db->where("kuis_id", $id);
        return $this->db->get("status_kuis");
    }
}
