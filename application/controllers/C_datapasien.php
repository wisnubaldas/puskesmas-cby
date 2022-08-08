<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_datapasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_datapasien');
	
	
	}

	public function index()
	{
		$data['pasien'] = $this->M_datapasien->tampil_data()->result();
		$this->load->view('V_datapasien', $data);
	}
}
