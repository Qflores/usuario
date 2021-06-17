<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sessión</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email"  id="email"  class="form-control" value="danalexbar@hotmail.com" placeholder="Ingrese Correo">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"  name="pass" id="pass" class="form-control"  value="645987321" placeholder="Constraseña">
					</div>
					
					<div class="form-group">
						<input type="submit" value="ingresar" name="ingresar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>

<?php 
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		include_once("../controllers/UserController.php");
		include_once("../config/conexion.php");
		include_once("../config/queries.php");
		$us = $_POST['email'];
		$pass = $_POST['pass'];
		$controller = new UserController();
		var_dump($us);
		var_dump($pass);

		/*$result = $controller->login($us,$pass);
		var_dump($result->num_rows);
		foreach ($controller->login($us, $pass) as $key => $value) {
			
			echo "<p>".$value['name']."</p>";
			echo "<p>".$value['email']."</p>";
		}*/
		//$files= mysqli_num_rows($result);//->num_rows

		//printf("Files:".$files);

		/*$row = $result->fetch_array(MYSQLI_NUM);
		echo "row:".$row;*/
		//echo $rs.lengths();
		//var_dump($rs);

		//echo "<script>window.location.replace('http://localhost/usuario');</script>";		
		//exit();


	}else{
		
	}

?>