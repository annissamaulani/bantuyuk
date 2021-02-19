<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('admin/transaksi');

		if($this->session->has_userdata('hak_akses') != 'admin') {
			redirect(base_url('admin/Login'));
		}
	}

	public function index() {
		$x['data']=$this->transaksi->get_data_perolehan_donasi();
        $this->load->view('admin/dashboard',$x);

	}
}
