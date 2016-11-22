<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_grformapel extends CI_Model {

	public function getGuru()
	{
		$data = $this->db->get('guru');
		return $data->result();
	}
	

}
