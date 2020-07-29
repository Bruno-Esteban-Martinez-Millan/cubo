<?php 
	require_once("conexion.php");
	class Venta extends Conexion{
		public function alta(){
			$producto = rand(1,15);
			$cliente = rand(1,15);
			$fecha = rand(1,43);
			$cantidad = rand(1,200);
			$this->sentencia = "INSERT INTO venta VALUES (null,$cliente,$fecha,$producto,$cantidad)";
			$this->ejecutarSentencia();
		}
		public function clientes(){
			$this->sentencia = "SELECT id,nombre FROM cliente";
			return $this->obtenerSentencia();
		}
		public function productos(){
			$this->sentencia = "SELECT id,nombre FROM producto";
			return $this->obtenerSentencia();	
		}
	

		public function matrizEnero($idp){
			$this->sentencia = "SELECT * FROM venta v,fecha f WHERE f.id = v.id_fecha AND id_producto=$idp AND f.fecha BETWEEN '2020-01-01' AND '2020-01-31' ORDER BY id_cliente";
			return $this->obtenerSentencia();
		}
			public function clientes2(){
			$this->sentencia = "SELECT id,nombre FROM cliente";
			return $this->obtenerSentencia();
		}
		public function productos2(){
			$this->sentencia = "SELECT id,nombre FROM producto";
			return $this->obtenerSentencia();	
		}
	public function matrizDiciembre($idp2){
			$this->sentencia = "SELECT * FROM venta v,fecha f WHERE f.id = v.id_fecha AND id_producto=$idp2 AND f.fecha BETWEEN '2020-12-01' AND '2020-12-31' ORDER BY id_cliente";
			return $this->obtenerSentencia();
		}
		public function clientes3(){
			$this->sentencia = "SELECT id,nombre FROM cliente";
			return $this->obtenerSentencia();
		}
		public function productos3(){
			$this->sentencia = "SELECT id,nombre FROM producto";
			return $this->obtenerSentencia();	
		}
			public function fechachida(){
			$this->sentencia = "SELECT id,fecha FROM fecha";
			return $this->obtenerSentencia();
		}



		public function matrizProductos($id3){
			$this->sentencia = "SELECT * FROM venta v,producto p WHERE p.id = v.id_producto AND id_fecha=$id3 AND v.cantidad BETWEEN '1' AND '200'  ORDER BY id_cliente";
			return $this->obtenerSentencia();
	}
	/*$obj = new Venta();
	for ($i = 0; $i<=150; $i++) {
		$obj->alta();
	}*/

 	}
 ?>	