<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stasiun extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}


	public function index() {
		$data['title']		= "Kota Stasiun";
		$data['stasiun']	= $this->M_Stasiun->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/stasiun/index', $data);
		$this->load->view('admin/template/__footer');
	}


	public function tambah() {
		$this->form_validation->set_rules('nama_stasiun', 'Nama Stasiun', 'trim|required|is_unique[stasiun.nama_stasiun]');

		if ($this->form_validation->run() == FALSE) {
			$data['title']		= "Tambah Kota Stasiun";
			$data['stasiun']	= $this->M_Stasiun->select()->result_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/stasiun/addStasiun', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->M_Stasiun->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('tambah', 'Ditambahkan');
			}
			redirect('admin/stasiun');
		}
	}


	public function update() {
		$this->form_validation->set_rules('nama_stasiun', 'Nama Stasiun', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->uri->segment(4);
			$data['title']		= "Update Kota Stasiun";
			$data['stasiun']	= $this->M_Stasiun->getIdStasiun($id)->row_array();
			$data['kota']		= $this->M_Stasiun->getKotaStasiun()->result_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/stasiun/editstasiun', $data);
			$this->load->view('admin/template/__footer');

			if (empty($id)) {
				redirect('admin/stasiun');
			}

		} else {

			$this->M_Stasiun->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('update', 'Diupdate');
			}
			redirect('admin/stasiun');
		}
	}


	public function delete() {
		$id = $this->uri->segment(4);

		if (! empty($id)) {
			$this->M_Stasiun->delete($id);
			$this->session->set_flashdata('hapus', 'Dihapus');
		}
		redirect('admin/stasiun');
	}

}