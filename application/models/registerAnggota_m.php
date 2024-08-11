<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterAnggota_m extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database jika belum di-autoload
        $this->load->database();
    }

    // Method untuk memasukkan data anggota baru ke dalam database
    public function insert_user($data) {
        return $this->db->insert('tbl_anggota', $data);
    }

    // Method untuk memeriksa apakah identitas sudah ada di database
    public function check_identitas_exists($identitas) {
        $this->db->where('identitas', $identitas);
        $query = $this->db->get('tbl_anggota');

        if($query->num_rows() > 0) {
            return true; // Identitas sudah ada
        } else {
            return false; // Identitas belum ada
        }
    }
}
