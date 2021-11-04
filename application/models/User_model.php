<?php
class User_model extends CI_model
{
    function getUser()
    {
        return $this->db->get('user')->result_array();
    }

    function getUserGuru()
    {
        $ids = 2;
        return $this->db->get_where('user', array('role_id' => $ids))->result_array();
    }

    function insertUserGuru()
    {
        $kelas = array(
            "tingkat" => $this->input->post("tingkat"),
            "rombel" => $this->input->post("rombel")
        );
        return $this->db->insert("kelas", $kelas);
    }

    function getKelasById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('kelas');
    }
    function updateKelas($id)
    {
        $data = array(
            "tingkat" => $this->input->post("tingkat"),
            "rombel" => $this->input->post("rombel")
        );
        $this->db->where("id", $id);
        return $this->db->update("Kelas", $data);
    }

    function deleteKelas($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("kelas");
    }
}
