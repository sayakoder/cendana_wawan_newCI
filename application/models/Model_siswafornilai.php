<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswafornilai extends CI_Model {

	public function getSiswa()
	{
		$data = $this->db->get('siswa');
		return $data->result();
	}
	

}
