<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_siswa');
		$this->load->model('M_kelas');
	}
	public function index()
	{
		$data['judul'] = 'Menu Siswa';
		$data['data_siswa'] = $this->M_siswa->getSiswa();
		$this->load_template('siswa/home',$data);
	}

	public function add_siswa()
	{
		$data['judul'] 	= 'Tambah Siswa';
		$data['kelas'] 	= $this->M_kelas->getkelas();

		$this->load_template('siswa/form_tambah_siswa', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_siswa', 'Nama_siswa', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas','Kelas', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('siswa/add_siswa');
		}
		else
		{
			$param  = $this->input->post();
			$proses = $this->M_siswa->act_tambah($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg',succ_msg('Siswa berhasil diinputkan'));
				redirect('siswa');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('siswa gagal diinputkan'));
				redirect('siswa/add_siswa');
			}
		}
	}

	public function edit($id)
	{
		$data['judul'] 		= 'Edit Siswa';
		$data['data_siswa'] = $this->M_siswa->getDetailSiswa($id);
		$data['data_kelas'] = $this->M_kelas->getKelas();
		$this->load_template('siswa/form_edit_siswa', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_siswa', 'Nama_siswa', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas','Kelas', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('siswa/add_siswa');
		}else{

			$param = $this->input->post();
			$proses = $this->M_siswa->act_edit($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg', succ_msg('siswa berhasi diedit'));
				redirect('siswa');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('siswa gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='')
	{
		$proses = $this->M_siswa->act_hapus($id);

		if ($proses >= 0) 
		{
			$this->session->set_flashdata('alert_msg', succ_msg('field telah terhapus'));
			redirect('siswa');
		}
		else
		{
			$this->session->set_flashdata('alert_msg',err_msg('field tidak terhapus'));
		}	
		redirect('siswa');
	}


}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */