
<?php 
	
include_once("conexion.php");

class Consultas {
	
	private $pst;
	private $conexion;

	function __construct(){

		$this->conexion = new Conexion();
		$this->pst = $this->conexion->getCon();
	}

	public function findAll($sql){

		//var_dump($this->pst->query("SELECT * FROM categoria"));

		return $this->pst->query($sql);
		
	}


}



?>