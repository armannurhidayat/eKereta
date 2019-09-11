<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Stasiun extends CI_Model {
	
	public function select() {
		$this->db->order_by('created', 'DESC');
		return $this->db->get('stasiun');
	}
	
	public function insert() {
		$data =[
			'nama_stasiun'	=> htmlspecialchars(strtoupper($this->input->post('nama_stasiun', TRUE))),
			'kode_stasiun'	=> htmlspecialchars(strtoupper($this->input->post('kode_stasiun', TRUE))),
			'is_kota'		=> htmlspecialchars($this->input->post('is_kota', TRUE))
		];

		$this->db->insert('stasiun', $data);
	}

	public function getIdStasiun($id) {
		return $this->db->get_where('stasiun', ['id' => $id]);
	}

	public function getKotaStasiun() {
		return $this->db->get_where('stasiun', ['is_kota' => 0]);
	}

	public function update() {
		$data =[
			'nama_stasiun'	=> htmlspecialchars(strtoupper($this->input->post('nama_stasiun', TRUE))),
			'kode_stasiun'	=> htmlspecialchars(strtoupper($this->input->post('kode_stasiun', TRUE))),
			'is_kota'		=> htmlspecialchars($this->input->post('is_kota', TRUE))
		];

		$id =[
			'id'			=> htmlspecialchars($this->input->post('id', TRUE))
		];

		$this->db->where($id)->update('stasiun', $data);
	}

	public function delete($id) {
		$this->db->delete('stasiun', ['id' => $id]);
	}

}