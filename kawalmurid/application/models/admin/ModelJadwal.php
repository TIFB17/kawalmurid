<?php
defined("BASEPATH") or exit("No direct access allowed");

class ModelJadwal extends CI_Model{
	public $properties = array("title"=>"Jadwal");

	function getJadwal(){
		return $this->db->get('viewJadwal');
	}
}
?>