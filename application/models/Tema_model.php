<?php
class Tema_model extends CI_model
{
    function getTema()
    {
        return $this->db->get('tema')->result_array();
    }

    function getTemaById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('tema');
    }
}
