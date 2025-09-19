<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ab_rental extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk login admin
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // Menggunakan MD5 untuk enkripsi password
        $query = $this->db->get('admin');
        
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    // Fungsi untuk mendapatkan data admin berdasarkan ID
    public function get_admin_by_id($id)
    {
        $this->db->where('id_admin', $id);
        $query = $this->db->get('admin');
        
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
?>
