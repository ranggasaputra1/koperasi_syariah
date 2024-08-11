<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_m extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Validasi form registrasi
    public function validasi() {
        $this->form_validation->set_rules('u_name', 'Username', 'required|is_unique[tbl_user.u_name]');
        $this->form_validation->set_rules('pass_word', 'Password', 'required');

        return $this->form_validation->run();
    }

    // Simpan data user baru ke database
    public function daftar_user() {
        $pass_word = sha1('nsi' . $this->input->post('pass_word'));
        
        $data = array(
            'u_name' => $this->input->post('u_name'),
            'pass_word' => $pass_word,
            'level' => 'pinjaman',
            'aktif' => 'Y'
        );

        return $this->db->insert('tbl_user', $data);
    }
}
