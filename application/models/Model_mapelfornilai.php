<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mapelfornilai extends CI_Model {

	public function getMapel()
	{
		$data = $this->db->get('mapel');
		return $data->result();
	}
	

}
