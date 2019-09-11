<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jadwal extends CI_Model {
	
	public function select() {
		$this->db->select('*, Asal.nama_stasiun AS asal, Tujuan.nama_stasiun AS tujuan');
		$this->db->from('jadwal');
		$this->db->join('kereta', 'kereta.id = jadwal.id_kereta', 'LEFT');
		$this->db->join('stasiun as Asal', 'Asal.id = jadwal.stasiun_asal', 'LEFT');
		$this->db->join('stasiun as Tujuan', 'Tujuan.id = jadwal.stasiun_tujuan', 'LEFT');
		return $this->db->get();
		$this->db->order_by('created', 'DESC');
	}

	public function insert() {
		$data =[
			'id_jadwal' 		=> htmlspecialchars($this->input->post('id_jadwal', TRUE)),
			'id_kereta' 		=> htmlspecialchars($this->input->post('nama_kereta', TRUE)),
			'stasiun_asal' 		=> htmlspecialchars($this->input->post('stasiun_asal', TRUE)),
			'stasiun_tujuan' 	=> htmlspecialchars($this->input->post('stasiun_tujuan', TRUE)),
			'tanggal' 			=> htmlspecialchars($this->input->post('tanggal', TRUE)),
			'waktu_berangkat' 	=> htmlspecialchars($this->input->post('waktu_berangkat', TRUE)),
			'waktu_sampai' 		=> htmlspecialchars($this->input->post('waktu_sampai', TRUE)),
			'status' 			=> 1,
			'harga' 			=> htmlspecialchars($this->input->post('harga', TRUE))
		];
		$this->db->insert('jadwal', $data);
	}

	public function getIdJadwal($id) {
		return $this->db->get_where('jadwal', ['id_jadwal' => $id]);
	}

	public function delete($id) {
		$this->db->delete('jadwal', ['id_jadwal' => $id]);
	}
	
}