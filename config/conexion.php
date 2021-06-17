<?php
class Conexion{

	private $user = "root";
	private $pass = "1234";
	private $host = "localhost";
	private $code = "utf8";
	private $db = "demo";
	var $cn = null;

	function __construct(){

		$this->cn = new mysqli($this->host, $this->user, $this->pass, $this->db);

		mysqli_query($this->cn, 'SET NAMES utf8');


		if(mysqli_connect_errno()){

			echo "Fallo la conexion a la abse de datos: ", mysqli_connect_error();

			return false;
			
		}

		echo "conexion exitosa";
		
		return true;

	}

	public function getCon(){
		
				
		if($this->cn != null) {
			return $this->cn;
		} else{
			return null;
		}
	}

}
