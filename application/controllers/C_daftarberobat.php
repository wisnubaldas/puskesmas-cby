<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_daftarberobat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['M_berobat','M_datapasien']);

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$data = [
			'title'=>'Pendaftaran Berobat'
		];
		$this->load->view('V_daftarberobat',$data);
	}

	public function daftar()
	{
		$this->form_validation->set_rules('nik', 'nik', 'trim|required|is_unique[pasien.nik]');
		$this->form_validation->set_rules('nama_pasien_berobat', 'nama_pasien_berobat', 'trim|required|is_unique[pasien.nama_pasien');

		if ($this->form_validation->run() == false) {
			$nik = $this->input->post('nik');
			$nama_pasien_berobat = $this->input->post('nama_pasien_berobat');
			$s = $this->input->post('s');
			$o = $this->input->post('o');
			$a = $this->input->post('a');
			$p = $this->input->post('p');
			$tgl_berobat = $this->input->post('tgl_berobat');
			$jenis_pembayaran = $this->input->post('jenis_pembayaran');
			$jenis_poli = $this->input->post('jenis_poli');

			$data = array(
				'nik' => $nik,
				'nama_pasien_berobat' => $nama_pasien_berobat,
				's' => $s,
				'o' => $o,
				'a' => $a,
				'p' => $p,
				'tgl_berobat' => $tgl_berobat,
				'jenis_pembayaran' => $jenis_pembayaran,
				'jenis_poli' => $jenis_poli,
				'hasil_lab' => '-'
			);

			$this->M_berobat->input_data($data, 'berobat');
			redirect('C_dashboard');
		} else {
		}
	}
	public function get_nik()
	{
		$hik = $this->input->get('query');
		$data = $this->M_datapasien->get_by_nik($hik);
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}
