<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ab_rental');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        // Cek apakah user sudah login
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function login_process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan kembali form login
            $this->load->view('login');
        } else {
            // Validasi sukses, cek database
            $result = $this->Ab_rental->login($username, $password);
            
            if ($result) {
                // Login berhasil, buat session
                $session_data = array(
                    'id_admin' => $result->id_admin,
                    'username' => $result->username,
                    'nama_admin' => $result->nama_admin,
                    'level' => $result->level,
                    'logged_in' => TRUE
                );
                
                $this->session->set_userdata($session_data);
                redirect('dashboard');
            } else {
                // Login gagal, tampilkan pesan error
                $data['error'] = 'Username atau password salah!';
                $this->load->view('login', $data);
            }
        }
    }

    public function logout()
    {
        // Hapus semua session
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
