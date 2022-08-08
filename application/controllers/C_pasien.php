<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pasien extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_rekammedis');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;
		$data['pasien'] = $this->M_rekammedis->joindatapasien($login);
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
		$data['jenis_poli'] = $this->input->get('jenis_poli');
		if (!empty($this->input->get('tgl_berobat'))) {
			$data['pasien'] = $this->M_rekammedis->search_join($data['tgl_berobat'], $data['jenis_poli']);
		}
		$this->load->view('pasien/V_pasien', $data);
	}
}
