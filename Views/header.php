


<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lista de usuarios</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <?php 
              
              session_start();

              if(!isset($_SESSION["usuario"])){

          ?>
          <a class="dropdown-item" href="#"><?echo $_SESSION["usuario"];?></a>
          <a class="dropdown-item" href="#">Lista Usuarios</a>
          <a class="dropdown-item" href="logout.php">Cerrar Sessión</a>

        <?php } else { echo '<a class="dropdown-item" href="login.php">Iniciar sesion</a>'; }?>

        </div>
      </li>
    </ul>
  </div>
</nav>