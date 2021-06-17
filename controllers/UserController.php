<?php 
 	//require_once("models/Usuario.php");
	require_once("config/queries.php");

	
 

 class UserController{
 	
 	//private $query ="";
 	private $usuario = null;
 	private $con = null;


 	function __construct(){

 		//$this->usuario = new Usuario();
 		$this->con = new Consultas();

 	}

 	public function listUsers(){

 		$sql = "select * from usuario"; 
 		//$query = "SELECT * FROM categoria";

 		return $this->con->findAll($sql);
 	}

 	public function insert($name, $email, $phone, $profile){

 		$sql = "INSERT INTO usuario (name , email, pass, phone, profile) VALUES ('$name', '$email', '$phone', '$phone', '$profile')";
 		var_dump($sql);

 		return $this->con->findAll($sql);

 	}

 	public function update($id, $name, $email, $phone, $profile){

 		$sql = "UPDATE usuario SET name='$name', email='$email', phone='$phone', pass='$phone', profile='$profile' WHERE id = '$id'";

 		//$sql = "UPDATE usuario SET name=".$name.", email=".$email.", phone=".$phone.", pass=".$phone.", profile=".$profile." WHERE id=".$id;
 		return $this->con->findAll($sql);

 	}


 	public function login($email, $pass){

 		$sql = "SELECT  * FROM usuario WHERE email='$email' and pass='$pass'";

 		return $this->con->findAll($sql);
 	}
}


?>