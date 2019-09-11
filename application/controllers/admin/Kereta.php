<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title']	= "Kereta Api";
		$data['kereta'] = $this->M_Kereta->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/kereta/index', $data);
		$this->load->view('admin/template/__footer');
	}


	public function tambah() {
		$this->form_validation->set_rules('nama_kereta', 'Nama Kereta', 'trim|required');
		$this->form_validation->set_rules('tipe_kereta', 'Tipe Kereta', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['title']	= "Tambah Kereta Api";
			$data['uuid']	= $this->uuid->v4();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/kereta/addkereta', $data);
			$this->load->view('admin/template/__footer');
			
		} else {

			$this->M_Kereta->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('tambah', 'Ditambahkan');
			}
			redirect('admin/kereta');
		}
	}


	public function update() {
		$this->form_validation->set_rules('nama_kereta', 'Nama Kereta', 'trim|required');
		$this->form_validation->set_rules('tipe_kereta', 'Tipe Kereta', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->uri->segment(4);
			$data['title']	= "Update Kereta Api";
			$data['kereta'] = $this->M_Kereta->getIdKereta($id)->row_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/kereta/editkereta', $data);
			$this->load->view('admin/template/__footer');

			if (empty($id)) {
				redirect('admin/stasiun');
			}

		} else {

			$this->M_Kereta->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('update', 'Diupdate');
			}
			redirect('admin/kereta');
		}
	}


	public function delete() {
		$id = $this->uri->segment(4);

		if (! empty($id)) {
			$this->M_Kereta->delete($id);
			$this->session->set_flashdata('hapus', 'Dihapus');
		}
		redirect('admin/kereta');
	}

}