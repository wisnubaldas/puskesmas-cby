<?php

class M_datapasien extends CI_Model
{
	function tampil_data()
	{
		return $this->db->get('berobat');
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function joindata()
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('pasien', 'berobat.nik = pasien.nik');
		$query = $this->db->get();
		return $query;
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function get_by_nik($nik)
	{
		$this->db->select('id_pasien,no_kk,nama_pasien');
		$this->db->from('pasien');
		$this->db->like('no_kk',$nik);
		return $this->db->get()->result();
		
	}
}
