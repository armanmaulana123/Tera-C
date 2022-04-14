<?php

class M_admin extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function data_user($id_user)
    {
        $this->db->select('*');
        $this->db->from('user u');
        $this->db->where('u.id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }

    function tambah_user($data)
    {
        return $this->db->insert('user', $data);
    }
}
