<?php

class M_rekammedis extends CI_Model
{
    function tampil_data_medis()
    {
        return $this->db->get('pasien');
    }


    function joindata()
    {
        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $query = $this->db->get();
        return $query->result_array();
    }

    function joindatapoli($jenis_poli)
    {
        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $this->db->where('jenis_poli', $jenis_poli);
        $query = $this->db->get();
        return $query->result_array();
    }

    function joindatapasien($username)
    {
        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join($tgl_berobat, $jenis_poli)
    {

        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $this->db->where('tgl_berobat', $tgl_berobat);
        $this->db->where('jenis_poli', $jenis_poli);
        $query = $this->db->get();
        return $query->result_array();
    }
}
