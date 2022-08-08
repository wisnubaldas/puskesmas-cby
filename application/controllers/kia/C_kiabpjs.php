<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kiabpjs extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_berobat');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
	}

	public function index()
	{
		$data['berobat']= $this->M_berobat->tampil_data_bpjs()->result(); 
		$this->load->view('klinik_kia/V_kia', $data);
	}

	public function edit($id_berobat){
		$data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username')])->row_array();
        $where = array('id_berobat' => $id_berobat);
        $data['berobat'] = $this->M_berobat->edit_data($where,'berobat')->result();
        $this->load->view('V_editbpjs',$data);
    }

    public function store(){
        $diagnosa = $this->input->post('diagnosa');
        $jenis_obat = $this->input->post('jenis_obat');

        $data = array(
            'diagnosa' => $diagnosa,
            'jenis_obat' => $jenis_obat,
        );
		$where = array(
			'id_berobat' => $id_berobat
		);
	 
		$this->M_berobat->update_data($where,$data,'berobat');
		redirect('C_kiabpjs/index');
    }
}
