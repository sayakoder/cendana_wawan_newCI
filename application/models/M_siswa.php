<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model 
{
	public function getSiswa()
	{	
		$this->db->select('siswa.*, kelas.nama_kelas');
		$this->db->from('siswa');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');

		$data = $this->db->get();

		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('siswa', $param);

		return $this->db->affected_rows();
	}

	public function getDetailSiswa($id)
	{
		$this->db->where('id_siswa', $id);
		$data = $this->db->get('siswa');

		return $data->row();
	}

	public function act_edit($param)
	{
		$object = 
		[
		'nama_siswa' 		=> $param['nama_siswa'],
		'alamat' 	=> $param['alamat'],
		'id_kelas' 	=> $param['id_kelas'],
		];

		$this->db->where('id_siswa', $param['id_siswa']);
		$this->db->update('siswa', $object);
		
		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');

		return $this->db->affected_rows();
	}
	
}
