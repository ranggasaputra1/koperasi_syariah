<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public $data = array('pesan' => '');

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('register_m', 'register', TRUE);
    }

    public function index() {
        if ($this->session->userdata('login') == TRUE) {
            redirect('home');
        } else {
            if($this->register->validasi()) {
                if($this->register->daftar_user()) {
                    $this->data['pesan'] = 'Registrasi berhasil. Silakan login.';
                    redirect('login');
                } else {
                    $this->data['pesan'] = 'Registrasi gagal. Silakan coba lagi.';
                }
            }
            $this->load->view('register_v', $this->data);
        }
    }
}
