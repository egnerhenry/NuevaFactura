<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

	public function __construct(){

	}
	public function select ($idcat=''){
		if ($idcat == '') {
			$rsCat = $this->db->from('categoria')
								->where('cat_estado', ST_ACTIVO)
								->get()
								->result();
			return $rsCat;
		} else {
			$rsCategoria = $this->db->from("categoria")
                            ->where("cat_id", $idcat)
                            ->get()
                            ->row();
            return $rsCategoria;     
		}
	}


}

