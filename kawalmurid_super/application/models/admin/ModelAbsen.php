<?php
defined("BASEPATH") or exit("No direct access allowed");

class ModelAbsen extends CI_Model{
	public $properties = array("title"=>"Absen");

	function getAbsen(){
		return $this->db->get('kehadiran');
	}

		function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	 
}
?>