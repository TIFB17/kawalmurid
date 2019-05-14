<?php
defined("BASEPATH") or exit("No direct access allowed!");

class Absen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/ModelAbsen');
	}
	function index(){
		$data = $this->ModelAbsen->properties;
		$data['kehadiran'] = $this->ModelAbsen->getAbsen()->result();
		$this->load->view('admin/absen', $data);
	}
	

	function hapus($id){
		$where = array('id_hadir' => $id);
		$this->ModelAbsen->hapus_data($where,'kehadiran');
			redirect('admin/absen');
	}
}
?>