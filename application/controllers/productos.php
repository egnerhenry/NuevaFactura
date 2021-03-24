<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('productos_model');
	}

	public function index(){		
	
	}
	public function select(){
		$data['productos']=$this->productos_model->select();
		$this->load->view('IngresarProductos',$data);
	}

	public function guardar(){
		$error = array();
		if ($_POST['prod_nombre'] == '') {
			$error['prod_nombre'] = 'falta ingresar nombre de producto';
		}
		if($_POST['prod_categoria'] == ''){
			$error['prod_categoria'] = 'falta categoria';
		}
		if ($_POST['prod_medida'] == '') {
			$error['prod_medida'] = 'falta medida';
		}
		if ($_POST['prod_precio_compra'] == '') {
			$error['prod_precio_compra'] = 'falta precio de compra';
		}
		if ($_POST['prod_precio_venta'] == '') {
			$error['prod_precio_venta']= "falta precio de venta";
		}
		if ($_POST['prod_codigo'] == '') {
			$error['prod_codigo'] = "falta codigo";
		}
		if ($_POST['prod_codigo_barra'] == '') {
			$error['prod_codigo_barra'] = "falta codigo de barra";
		}
		if ($_POST['prod_descripcion'] == '') {
			$error['prod_descripcion'] = "falta descripcion";
		}
		if ($_POST['prod_stock'] == '') {
			$error['prod_sto'] = "falta descripcion";
		}
		if (count($error) > 0) {
			$data = ['status'=>STATUS_FAIL,'tipo'=>1, 'errores'=>$error];
    		echo json_encode($data);
    		exit();
		}
		$this->productos_model->guardar();

	}
}

