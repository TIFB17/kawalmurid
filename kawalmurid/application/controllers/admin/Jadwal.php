<?php
defined("BASEPATH") or exit("No direct access allowed!");

class Jadwal extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/ModelJadwal');
	}
	function index(){
		$data = $this->ModelJadwal->properties;
		$data['jadwal'] = $this->ModelJadwal->getJadwal()->result();
		$this->load->view('admin/jadwal', $data);
	}
}
?>