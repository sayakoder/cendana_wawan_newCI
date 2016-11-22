<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_nilai');
		$this->load->model('Model_mapelfornilai');
		$this->load->model('Model_siswafornilai');
	}
	public function index()
	{
		$data['judul'] = 'Menu Nilai';
		$data['data_nilai'] = $this->M_nilai->getNilai();
		$this->load_template('nilai/home',$data);
	}

	public function add_nilai()
	{
		$data['judul'] 	= 'Tambah Nilai';
		$data['mapel'] 	= $this->Model_mapelfornilai->getMapel();
		$data['siswa'] 	= $this->Model_siswafornilai->getSiswa();

		$this->load_template('nilai/form_tambah_nilai', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('total_nilai', 'Total_nilai', 'required');
		$this->form_validation->set_rules('id_mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('id_siswa','Siswa', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('nilai/add_nilai');
		}
		else
		{
			$param  = $this->input->post();
			$proses = $this->M_nilai->act_tambah($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg',succ_msg('Nilai berhasil diinputkan'));
				redirect('nilai');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('Nilai gagal diinputkan'));
				redirect('nilai/add_nilai');
			}
		}
	}

	public function edit($id)
	{
		$data['judul'] 		= 'Edit Nilai';
		$data['data_nilai'] = $this->M_nilai->getDetailNilai($id);
		$data['data_mapel'] = $this->Model_mapelfornilai->getMapel();
		$data['data_siswa'] = $this->Model_siswafornilai->getSiswa();
		$this->load_template('nilai/form_edit_nilai', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('total_nilai', 'Total_nilai', 'required');
		$this->form_validation->set_rules('id_mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('id_siswa','Siswa', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('nilai/add_nilai');
		}else{

			$param = $this->input->post();
			$proses = $this->M_nilai->act_edit($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg', succ_msg('nilai berhasi diedit'));
				redirect('nilai');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('nilai gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='')
	{
		$proses = $this->M_nilai->act_hapus($id);

		if ($proses >= 0) 
		{
			$this->session->set_flashdata('alert_msg', succ_msg('field telah terhapus'));
			redirect('nilai');
		}
		else
		{
			$this->session->set_flashdata('alert_msg',err_msg('field tidak terhapus'));
		}	
		redirect('nilai');
	}


}
