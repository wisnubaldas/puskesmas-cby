<?php 
 
class M_bpjs extends CI_Model{	
	function tampil_data_bpjs(){
		return $this->db->get('berobat');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    function joindata(){
        $this->db->select('tinggi_badan, berat_badan');
        $this->db->from('pasien');
        $this->db->join('berobat','berobat.nik = pasien.nik');      
        $query = $this->db->get();
        return $query;
    }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}