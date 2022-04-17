<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_auth");
        $this->load->model("M_admin");
    }

    public function index()
    {
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['title'] = "Tera-C";

        $this->load->view('templates/landing/header.php', $data);
        $this->load->view('v_home.php');
    }

    public function profile()
    {
        // $this->load->view('templates/landing/header.php', $data);
        $this->load->view('v_profile.php');
    }

    public function editProfile()
    {
        // $this->load->view('templates/landing/header.php', $data);
        $this->load->view('v_editProfile.php');
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

    public function proses_login()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));

        $user = $this->M_auth->cekUser($email);
        $hash = password_hash($user['password'], PASSWORD_DEFAULT);

        if (password_verify(md5($password), $hash)) {
            $data = [
                'id_user' => $user['id_user'],
                'nama_user' => $user['nama_user'],
                'email' => $user['email'],
                'level_user' => $user['level_user']
            ];
            $this->session->set_userdata($data);

            if ($user['level_user'] >= 1 && $user['level_user'] <= 2) {
                $this->session->set_flashdata('pesan', array(
                    'status_pesan' => true,
                    'isi_pesan' => 'Berhasil Login, Selamat Datang!'
                ));
                redirect('landing');
            } else {
                $this->session->set_flashdata('pesan', array(
                    'status_pesan' => false,
                    'isi_pesan' => 'Username Atau Password Salah, Silahkan Coba Lagi!'
                ));
                redirect('landing/login');
            }
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Username Atau Password Salah, Silahkan Coba Lagi!'
            ));
            redirect('landing/login');
        }
    }

    public function proses_register()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);

        $pesan = array();

        if ($this->form_validation->run() == false) {
            array_push($pesan, validation_errors());
        }

        $data = [
            'nama_user' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => md5(htmlspecialchars($this->input->post('password', true))),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'level_user' => 2,
            'foto_profil' => "default.jpg"
        ];

        if (empty($pesan)) {
            $result = $this->M_admin->tambah_user($data);
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => implode($pesan)
            ));
            redirect('landing/register');
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Didaftarkan'
            ));
            redirect('landing/login');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Akun Gagal Didaftarkan'
            ));
            redirect('landing/register');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('landing/login');
    }
}
