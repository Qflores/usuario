
<?php

include_once("controllers/UserController.php");

$users = new UserController();


?>	
	<div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Administrar <b>usuarios</b></h2>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-success" id="btnadd" data-toggle="modal" data-target="#modaledit"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo usuario</span></a>
          </div>
                </div>
            </div>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Perfil</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>
    <?php 
      foreach ($users->listUsers() as $clave =>$valor) {
    ?>
    <tr>
      <th scope="row"><?=$valor['id'] ?></th>
      <td><?=$valor['name'] ?></td>
      <td><?=$valor['email'] ?></td>
      <td><?=$valor['phone'] ?></td>
      <td><?=$valor['profile'] ?></td>
      <td>
      	<button class="btn btn-warning editaru" type="button" id="editar"

        value="<?php echo $valor['id'].",".$valor['name'].",".$valor['email'].",".$valor['phone'].",".$valor['profile'];?>" data-toggle="modal" data-target="#modaledit">Editar</button>
      	<button id="btndelete" value="<?php echo $valor['id'];?>" class="btn btn-danger" type="button">Eliminar</button>

      </td>
    </tr>
    <?php }?>
  </tbody>
</table>


<?php 
  

  

  $users = new UserController();

if(isset($_POST['registrar']) != null){

  $id = $_REQUEST['cod'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $profile = $_POST['profile'];

  if($id==0){
  $rs = $users->insert($name, $email, $phone, $phone, $profile);
  var_dump($rs);

  }else{
    $rs = $users->update($id, $name, $email, $phone, $phone,  "USER");
    var_dump($rs);
  }

}


?>

<div class="modal fade" id="modaledit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="saveus" method="post">
          <input type="hidden" name="cod"  id="cod" >
          
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" name="name"  id="name"  class="form-control" class="form-control-plaintext" >
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
              <input type="email" name="email" id="email" class="form-control" class="form-control-plaintext" >
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="phone" id="phone" class="form-control-plaintext">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Perfil</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="profile"  id="profile" readonly>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" name="registrar" class="btn btn-success" >Guardar</button>
            </div>
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>




