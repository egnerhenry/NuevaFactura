<?PHP

class Productos_model extends CI_Model
{
	public function select(){

	}

	public function guardar(){



		$arrayProducto = array(//'prod_codigo_sunat' => $_POST[''],
							   'prod_codigo' => $_POST['prod_codigo'],
							   'prod_nombre' => $_POST['prod_nombre'],
							   'prod_descripcion' => $_POST['prod_descripcion'],
							   'prod_precio_venta' => $_POST['prod_precio_venta'],
							   'prod_precio_compra'=> $_POST['prod_precio_compra'],
							   'prod_codigo_barra' => $_POST['prod_codigo_barra'],
							   //'prod_cantidad_minima' => $_POST[''],
							   'prod_estado' => ST_ACTIVO,
							   'prod_categoria_id' => $_POST['prod_categoria'],
							   'prod_medida_id'    => $_POST['prod_medida'],
							   //'prod_almacen_id'   => $this->session->userdata('am')
							   'prod_fecha' => date('Y-m-d')
							);
	
		$this->db->insert('productos',$arrayProducto);

	}
		
	public function eliminar(){

	}
}

