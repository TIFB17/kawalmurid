<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	
	{
	parent::__construct();
	
	}
	function index()
	{
		$this->load->view("admin/guru");

	}

}
?>