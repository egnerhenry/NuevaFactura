<?PHP

class Productos_model extends CI_Model
{
	public function select(){
				$resultado = $this->db->from('productos')
				->get()
				->result();
			return $resultado;
	}

	public function guardar(){

		if ($_POST['prod_codigo'] != '') {
			$carpeta = 'images/productos/';
       opendir($carpeta);
       $destino = $carpeta.$_FILES['prod_imagen']['name'];
       
       copy($_FILES['prod_imagen']['tmp_name'], $destino);       

       $data = array(
                        'prod_id' => $_POST['prod_id'],
                        'prod_imagen' => $_FILES['prod_imagen']['name']
                    ); 
		}


		$arrayProducto = array(//'prod_codigo_sunat' => $_POST[''],
							   'prod_codigo' => $_POST['prod_codigo'],
							   'prod_nombre' => $_POST['prod_nombre'],
							   'prod_descripcion' => $_POST['prod_descripcion'],
							   'prod_precio_venta' => $_POST['prod_precio_venta'],
							   'prod_precio_compra'=> $_POST['prod_precio_compra'],
							   'prod_codigo_barra' => $_POST['prod_codigo_barra'],
							   'prod_stock' => $_POST['prod_stock'],
							   'prod_estado' => ST_ACTIVO,
							   'prod_categoria_id' => $_POST['prod_categoria'],
							   'prod_medida_id'    => $_POST['prod_medida'],
							   'prod_imagen'   => $_FILES['prod_imagen']['name'],
							   'prod_fecha' => date('Y-m-d')
							); //var_dump($arrayProducto); exit();
	
		$this->db->insert('productos',$arrayProducto);

	}

		
	public function eliminar($id){
			$this->db->where('prod_id', $id);
			$this->db->delete('productos');

	}
}

