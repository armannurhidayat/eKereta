<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}


	public function index() {
		$data['title']	= "Jadwal Kereta";
		$data['jadwal']	= $this->M_Jadwal->select()->result_array();
		
		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/jadwal/index', $data);
		$this->load->view('admin/template/__footer');
	}


	public function tambah() {
		$this->form_validation->set_rules('nama_kereta', 'Kerata', 'trim|required');
		$this->form_validation->set_rules('stasiun_asal', 'Stasiun Asal', 'trim|required');
		$this->form_validation->set_rules('stasiun_tujuan', 'Stasiun Tujuan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('waktu_berangkat', 'Waktu', 'trim|required');
		$this->form_validation->set_rules('waktu_sampai', 'Waktu', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|is_numeric');

		if ($this->form_validation->run() == FALSE) {
			$data['title']		= "Tambah Jadwal Kereta";
			$data['uuid']		= $this->uuid->v4();
			$data['stasiun']	= $this->M_Stasiun->select()->result_array();
			$data['kereta']		= $this->M_Kereta->select()->result_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/jadwal/addJadwal', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->M_Jadwal->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('tambah', 'Ditambahkan');
			}
			redirect('admin/jadwal');
		}
	}


	public function update() {
		$this->form_validation->set_rules('nama_kereta', 'Kerata', 'trim|required');
		$this->form_validation->set_rules('stasiun_asal', 'Stasiun Asal', 'trim|required');
		$this->form_validation->set_rules('stasiun_tujuan', 'Stasiun Tujuan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|is_numeric');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->uri->segment(4);
			$data['title']		= "Update Jadwal Kereta";
			$data['jadwal']		= $this->M_Jadwal->getIdJadwal($id)->row_array();
			$data['stasiun']	= $this->M_Stasiun->select()->result_array();
			$data['kereta']		= $this->M_Kereta->select()->result_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/jadwal/editJadwal', $data);
			$this->load->view('admin/template/__footer');

		}
	}


	public function delete() {
		$id = $this->uri->segment(4);

		if (!empty($id)) {
			$this->M_Jadwal->delete($id);
			$this->session->set_flashdata('hapus', 'Dihapus');
		}
		redirect('admin/jadwal');
	}

}