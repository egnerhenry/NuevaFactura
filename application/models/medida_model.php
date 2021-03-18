<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medida_model extends CI_Model {

	public function __construct(){

	}

	public function select(){
		$medida = $this->db->from('medida')
						   ->get()
						   ->result();
		return $medida; 
	}

	public function guardar(){

	}

	public function eliminar(){
		
	}

}

