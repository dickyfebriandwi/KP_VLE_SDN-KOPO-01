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
        $this->db->get('tugas');
    }
    public function insertPenugasan()
    {
        $data = array(
            "user_id" => $this->input->post("user_id"),
            "tema_id" => $this->input->post("tema_id"),
            "kelas_id" => $this->input->post("kelas_id"),
            "judul_penugasan" => $this->input->post("judul_penugasan"),
            "deskripsi_tugas" => $this->input->post("deskripsi"),
            "due_date" => date("Y-m-d H:i:s", strtotime($this->input->post("due_date")))
        );
        $this->db->set($data);
        return $this->db->insert("penugasan");
    }

    public function updatePenugasan($id)
    {
        $data = array(
            "tema_id" => $this->input->post("tema_id"),
            "judul_penugasan" => $this->input->post("judul_penugasan"),
            "deskripsi_tugas" => $this->input->post("deskripsi"),
            "due_date" => date("Y-m-d H:i:s", strtotime($this->input->post("due_date")))
        );
        $this->db->where("id", $id);
        $this->db->set($data);
        return $this->db->update("penugasan");
    }

    public function deletePenugasan($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("penugasan");
    }
}
