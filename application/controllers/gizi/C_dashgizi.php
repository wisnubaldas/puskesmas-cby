<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashgizi extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$this->load->view('klinik_gizi/V_dashgizi');
	}
}
