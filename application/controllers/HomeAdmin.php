<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = "Dashboard";

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/template/__footer');
	}
}