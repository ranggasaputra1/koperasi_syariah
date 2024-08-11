<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterAnggota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form'); // Load form helper
        $this->load->library('form_validation'); // Load form validation library
        $this->load->model('registerAnggota_m'); // Pastikan model yang digunakan sudah benar
    }

    public function index() {
        $this->load->view('register_anggota_v'); // Nama view yang akan ditampilkan
    }

    public function submit() {
        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('identitas', 'Username', 'required');
        $this->form_validation->set_rules('pass_word', 'Password', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('status', 'Status Perkawinan', 'required');
        $this->form_validation->set_rules('departement', 'Status Guru', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('tgl_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('jabatan_id', 'Jabatan', 'required');
        $this->form_validation->set_rules('aktif', 'Aktif Keanggotaan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register_anggota_v');
        } else {
            // Proses input data
            $data = [
                'nama' => $this->input->post('nama'),
                'identitas' => $this->input->post('identitas'),
                'pass_word' => sha1('nsi' . $this->input->post('pass_word')),
                'jk' => $this->input->post('jk'),
                'tmp_lahir' => $this->input->post('tmp_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'status' => $this->input->post('status'),
                'departement' => $this->input->post('departement'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'notelp' => $this->input->post('notelp'),
                'tgl_daftar' => $this->input->post('tgl_daftar'),
                'jabatan_id' => $this->input->post('jabatan_id'),
                'aktif' => $this->input->post('aktif'),
            ];

            $this->registerAnggota_m->insert_user($data);
            redirect('login');
        }
    }
}
