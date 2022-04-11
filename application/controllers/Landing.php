<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
        $this->load->view('home.php');
    }

    public function login()
    {
        $this->load->view('login.php');
    }

    public function register()
    {
        $this->load->view('register.php');
    }
}
