<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelas extends Auth_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Model_kls');
	}
	public function index()
	{
		$data['judul'] = 'Menu Kelas';
		$data['data_kelas'] = $this->Model_kls->getKelas();
		$this->load_template('kelas/home',$data);
	}

	public function add_kelas()
	{
		$data['judul'] 	= 'Tambah kelas';

		$this->load_template('kelas/form_tambah_kelas', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama_kelas', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('kelas/add_kelas');
		}
		else
		{
			$param  = $this->input->post();
			$proses = $this->Model_kls->act_tambah($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg',succ_msg('Kelas berhasil diinputkan'));
				redirect('kelas');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('Kelas gagal diinputkan'));
				redirect('kelas/add_kelas');
			}
		}
	}

	public function edit($id)
	{
		$data['judul'] 		= 'Edit kelas';
		$data['data_kelas'] = $this->Model_kls->getDetailKelas($id);

		$this->load_template('kelas/form_edit_kelas', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama_kelas', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('kelas/add_kelas');
		}else{

			$param = $this->input->post();
			$proses = $this->Model_kls->act_edit($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg', succ_msg('kelas berhasi diedit'));
				redirect('kelas');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('kelas gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='')
	{
		$proses = $this->Model_kls->act_hapus($id);

		if ($proses >= 0) 
		{
			$this->session->set_flashdata('alert_msg', succ_msg('field telah terhapus'));
			redirect('kelas');
		}
		else
		{
			$this->session->set_flashdata('alert_msg',err_msg('field tidak terhapus'));
		}	
		redirect('kelas');
	}


}

