<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model 
{
	public function getNilai()
	{	
		$this->db->select('nilai.*, mapel.nama_mapel, siswa.nama_siswa');
		$this->db->from('nilai');
		$this->db->join('mapel', 'mapel.id_mapel = nilai.id_mapel', 'left');
		$this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa', 'left');

		$data = $this->db->get();

		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('nilai', $param);

		return $this->db->affected_rows();
	}

	public function getDetailNilai($id)
	{
		$this->db->where('id_nilai', $id);
		$data = $this->db->get('nilai');

		return $data->row();
	}

	public function act_edit($param)
	{
		$object = 
		[
		'total_nilai' 		=> $param['total_nilai'],
		'id_mapel' 	=> $param['id_mapel'],
		'id_siswa' 	=> $param['id_siswa'],
		];

		$this->db->where('id_nilai', $param['id_nilai']);
		$this->db->update('nilai', $object);
		
		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('nilai');

		return $this->db->affected_rows();
	}
	
}
