<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('page/template/__header');
		$this->load->view('page/index');
		$this->load->view('page/template/__footer');
	}

	public function searchJadwalTiket() {
		$id_asal 	= $_GET['asal'];
		$id_tujuan	= $_GET['tujuan'];

		$data['jadwal'] = $this->db->query("SELECT *, Asal.nama_stasiun AS asal,
			Tujuan.nama_stasiun AS tujuan FROM jadwal
			LEFT JOIN kereta ON kereta.id = jadwal.id_kereta
			LEFT JOIN stasiun AS Asal ON Asal.id = jadwal.stasiun_asal
			LEFT JOIN stasiun AS Tujuan ON Tujuan.id = jadwal.stasiun_tujuan
			WHERE stasiun_asal = '$id_asal'
			AND stasiun_tujuan = '$id_tujuan'");

		if ($data['jadwal']->num_rows() > 0) {
			$this->load->view('page/resultJadwalTiket', $data);

		} else {

			echo "<p class='text-danger'>Jadwal Tidak Ditemukan!</p>";
		}
	}
}