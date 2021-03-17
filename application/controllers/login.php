<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login');
	}

	public function index()
	{
		$data=[];
		$this->load->view('acceso/login', $data);

	}
	}