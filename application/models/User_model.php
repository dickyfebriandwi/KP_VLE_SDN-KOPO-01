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

    function getUserSiswa()
    {
        $ids = 3;
        return $this->db->get_where('user', array('role_id' => $ids))->result_array();
    }

    function insertUserGuru()
    {
        $user = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
            "image" => "default.jpg",
            "password" => password_hash($this->input->post("password"), PASSWORD_DEFAULT),
            "role_id" => 2,
            "is_active" => 1,
            "kelas_id" => $this->input->post("kelas_id"),
            "nuptk_nisn" => $this->input->post("nuptk"),
            "jabatan" => $this->input->post("jabatan"),
            "date_created" => time()
        );
        return $this->db->insert("user", $user);
    }

    function getUserById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('user');
    }

    function updateGuru($data)
    {
        $this->db->where("id", $data->id);
        return $this->db->update("user", $data);
    }

    function deleteKelas($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("kelas");
    }
}
