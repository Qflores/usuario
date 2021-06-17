<?php

include_once("controllers/UserController.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL) ?$_REQUEST['action']:'';

$id = $_POST['cod'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$profile = $_POST['profile'];




$users = new UserController();


if($id==0){
	$rs = $users->insert($name, $email, $phone, $phone,  $profile);
	var_dump($rs);

}else{
	$rs = $users->update($id, $name, $email, $phone, $phone,  $profile);
	var_dump($rs);
}

var_dump($name);

echo "rs".$name ;

?>