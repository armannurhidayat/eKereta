<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kereta extends CI_Model {
	
	public function select() {
		$this->db->order_by('created', 'DESC');
		return $this->db->get('kereta');
	}

	public function insert() {
		$data =[
			'id'		  => $this->input->post('id', TRUE),
			'nama_kereta' => htmlspecialchars(strtoupper($this->input->post('nama_kereta', TRUE))),
			'tipe_kereta' => htmlspecialchars($this->input->post('tipe_kereta', TRUE))
		];

		$this->db->insert('kereta', $data);
	}

	public function getIdKereta($id) {
		return $this->db->get_where('kereta', ['id' => $id]);
	}

	public function update() {
		$data =[
			'nama_kereta' => htmlspecialchars(strtoupper($this->input->post('nama_kereta', TRUE))),
			'tipe_kereta' => htmlspecialchars($this->input->post('tipe_kereta', TRUE))
		];

		$id =[
			'id' => $this->input->post('id')
		];

		$this->db->where($id)->update('kereta', $data);
	}

	public function delete($id) {
		$this->db->delete('kereta', ['id' => $id]);
	}
	
}