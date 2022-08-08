<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_editbpjs extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_datapasien');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$data['berobat'] = $this->M_datapasien->tampil_data()->result();
		$this->load->view('V_editbpjs', $data);
	}
}