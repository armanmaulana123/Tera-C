<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Tera-C";

        $this->load->view('templates/landing/header.php', $data);
        $this->load->view('v_home.php');
    }

    public function login()
    {
        $data['title'] = "Tera-C | Masuk";

        $this->load->view('templates/landing/header.php', $data);
        $this->load->view('v_login.php');
    }

    public function register()
    {
        $data['title'] = "Tera-C | Registrasi";

        $this->load->view('templates/landing/header.php', $data);
        $this->load->view('v_register.php');
    }
}
