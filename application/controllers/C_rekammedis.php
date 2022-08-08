<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_rekammedis extends CI_Controller
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
		$login = $this->session->userdata('user_login');
		$data['login'] = $login;
		if ($login == 'admin') {
			$data['pasien'] = $this->M_rekammedis->joindata();
		}
		if ($login == 'poligigi') {
			$data['pasien'] = $this->M_rekammedis->joindatapoli('BP Gigi');
		}
		if ($login == 'klinikumum') {
			$data['pasien'] = $this->M_rekammedis->joindatapoli('KLinik Umum');
		}
		if ($login == 'klinikkia') {
			$data['pasien'] = $this->M_rekammedis->joindatapoli('KIA KB');
		}
		if ($login == 'klinikgizi') {
			$data['pasien'] = $this->M_rekammedis->joindatapoli('Klinik Gizi');
		}
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
		$data['jenis_poli'] = $this->input->get('jenis_poli');
		if (!empty($this->input->get('tgl_berobat'))) {
			$data['pasien'] = $this->M_rekammedis->search_join($data['tgl_berobat'], $data['jenis_poli']);
		}
		$this->load->view('V_rekammedis', $data);
	}
}
