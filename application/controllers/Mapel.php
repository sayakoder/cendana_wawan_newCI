<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Auth_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_mapel');
		$this->load->model('Model_grformapel');
	}
	public function index()
	{
		$data['judul'] = 'Menu mapel';
		$data['data_mapel'] = $this->M_mapel->getMapel();
		$this->load_template('mapel/home',$data);
	}

	public function add_mapel()
	{
		$data['judul'] 	= 'Tambah mapel';
		$data['guru'] 	= $this->Model_grformapel->getguru();

		$this->load_template('mapel/form_tambah_mapel', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_mapel', 'Nama_mapel', 'required');
		$this->form_validation->set_rules('id_guru','guru', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('mapel/add_mapel');
		}
		else
		{
			$param  = $this->input->post();
			$proses = $this->M_mapel->act_tambah($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg',succ_msg('mapel berhasil diinputkan'));
				redirect('mapel');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('mapel gagal diinputkan'));
				redirect('mapel/add_mapel');
			}
		}
	}

	public function edit($id)
	{
		$data['judul'] 		= 'Edit mapel';
		$data['data_mapel'] = $this->M_mapel->getDetailMapel($id);
		$data['data_guru'] = $this->Model_grformapel->getGuru();
		$this->load_template('mapel/form_edit_mapel', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_mapel', 'Nama_mapel', 'required');
		$this->form_validation->set_rules('id_guru','guru', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('mapel/add_mapel');
		}else{

			$param = $this->input->post();
			$proses = $this->M_mapel->act_edit($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg', succ_msg('mapel berhasi diedit'));
				redirect('mapel');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('mapel gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='')
	{
		$proses = $this->M_mapel->act_hapus($id);

		if ($proses >= 0) 
		{
			$this->session->set_flashdata('alert_msg', succ_msg('field telah terhapus'));
			redirect('mapel');
		}
		else
		{
			$this->session->set_flashdata('alert_msg',err_msg('field tidak terhapus'));
		}	
		redirect('mapel');
	}


}
