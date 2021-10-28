<?php
class Kelas_model extends CI_model
{
    function getKelas()
    {
        #$this->db->get("kelas")->result_array();
        $this->db->from("kelas");
        $this->db->order_by('tingkat', 'asc');
        $this->db->order_by('rombel', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function insertKelas()
    {
        $kelas = array(
            "tingkat" => $this->input->post("tingkat"),
            "rombel" => $this->input->post("rombel")
        );
        return $this->db->insert("kelas", $kelas);
    }
}
