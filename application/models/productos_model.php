<?PHP

class Productos_model extends CI_Model
{
	
	function __construct(argument)
	{
		
	}


	public function select(){

	}

	public function guardar(){



		$arrayProducto = array('prod_codigo_sunat' => $_POST[''],
							   'prod_codigo' => $_POST[''],
							   'prod_nombre' => $_POST[''],
							   'prod_descripcion' => $_POST[''],
							   'prod_precio_venta' => $_POST[''],
							   'prod_precio_compra'=> $_POST[''],
							   'prod_codigo_barra' => $_POST[''],
							   'prod_cantidad_minima' => $_POST[''],
							   'prod_estado' => $_POST[''],
							   'prod_categoria_id' => $_POST[''],
							   'prod_medida_id'    => $_POST[''],
							   'prod_almacen_id'   => $_POST[''],
							   'prod_fecha' => $_POST['']
							);
	
		$this->db->insert('productos',$arrayProducto);

	}
		
	public function eliminar(){

	}
}

