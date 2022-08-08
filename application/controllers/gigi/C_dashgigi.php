<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashgigi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$this->load->view('poli_gigi/V_dashgigi');
	}
}
