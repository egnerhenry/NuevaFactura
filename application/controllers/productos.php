<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('productos_model');
	}

	public function index(){		
	
	}

	public function guardar(){
		$this->productos_model->guardar();

	}
}

