<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tambahdatapasien extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('M_datapasien');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$this->load->view('V_tambahdatapasien');
	}

    public function tambah(){

        $this->form_validation->set_rules($this->rulesNya());
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('V_tambahdatapasien');
        }
        else
        {
            $no_kk = $this->input->post('no_kk');
            $nik = $this->input->post('nik');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_pasien = $this->input->post('nama_pasien');
            $umur_pasien = $this->input->post('umur_pasien');
            $alamat = $this->input->post('alamat');
            $no_hp =$this->input->post('no_hp');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir_pasien = $this->input->post('tgl_lahir_pasien');
            $gender = $this->input->post('gender');
            $tinggi_badan = $this->input->post('tinggi_badan');
            $berat_badan = $this->input->post('berat_badan');
            $no_bpjs = $this->input->post('no_bpjs');

            $data = array(
                'no_kk' => $no_kk,
                'nik' => $nik,
                'username' => $username,
                'password' => $password,
                'nama_pasien' => $nama_pasien,
                'umur_pasien' => $umur_pasien,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir_pasien' => $tgl_lahir_pasien,
                'gender' => $gender,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
                'no_bpjs' => $no_bpjs
            );
            $this->M_datapasien->input_data($data, 'pasien');
            redirect('C_tambahdatapasien');
        }
    }
    
    protected function rulesNya()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'no_kk',
                'label' => 'Nomer Kartu Keluarga, ',
                'rules' => 'required|numeric',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                        'numeric' => '%s harus berupa numerik',
                        'min_length' => '%s minimal 16 digit...'
                ),
            ],
            [
                'field' => 'nik',
                'label' => 'Nomer Induk Keluarga, ',
                'rules' => 'required|numeric',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                        'numeric' => '%s harus berupa numerik',
                ),
            ],
            [
                'field' => 'no_bpjs',
                'label' => 'Nomer BPJS, ',
                'rules' => 'required|numeric',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                        'numeric' => '%s harus berupa numerik',
                ),
            ],
            [
                'field' => 'nama_pasien',
                'label' => 'Nama Pasien, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'umur_pasien',
                'label' => 'Umur Pasien, ',
                'rules' => 'required|numeric',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                        'numeric' => ' %s harus berupa numerik.....',
                ),
            ],
            [
                'field' => 'tempat_lahir',
                'label' => 'Tempat Lahir, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'tgl_lahir_pasien',
                'label' => 'Tanggal lahir pasien, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'password',
                'label' => 'Password, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'gender',
                'label' => 'Jenis kelamin, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'tinggi_badan',
                'label' => 'Tinggi badan, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
            [
                'field' => 'berat_badan',
                'label' => 'Berat badan, ',
                'rules' => 'required',
                'errors' => array(
                        'required' => ' %s harus di isi....',
                ),
            ],
        ];
    }
}
