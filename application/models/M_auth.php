<?php

class M_auth extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function cekUser($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }

}
