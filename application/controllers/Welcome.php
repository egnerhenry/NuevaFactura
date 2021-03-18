<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct() {
        parent::__construct();

        $this->load->model("medida_model");
        $this->load->model("categoria_model");
    }
	
	public function index()
	{


		$data['medida'] = $this->medida_model->select();
		$data['categoria'] = $this->categoria_model->select();
		$this->load->view('header');
		$this->load->view('ingresarproducto',$data);
		$this->load->view('footer');

	}
}
	
