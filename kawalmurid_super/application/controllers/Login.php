<?php
defined("BASEPATH") or exit("NO ACCESS");

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelLogin");
	}

	function index(){
		$data = $this->ModelLogin->properties;
		$this->load->view("login", $data);
	}
}
?>