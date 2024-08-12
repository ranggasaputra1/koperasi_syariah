<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ketuaController extends MY_Controller
{

	public function __construct() {
		parent::__construct();
		// cek status level admin
		if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'ketua') {
			//oke
			$this->data['akses'] = TRUE;
		} else {
			// no
			$this->data['akses'] = FALSE;
			redirect('home/no_akses');
		}
	}   

}