<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php"> <i class="fa-sharp fa-regular fa-book-open fa-flip"></i> Inico
            <span class="visually-hidden">(current)</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Autor</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?action=autor">Crear autor</a>           
            <a class="dropdown-item" href="index.php?action=autorMostrar">Ver Autores</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?action=Categoria">Crear categoria</a>      
            <a class="dropdown-item" href="index.php?action=CategoriaMostrar">Ver Categorias</a>
          </div>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estanteria</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?action=Estanteria">Crear estanteria</a>           
            <a class="dropdown-item" href="index.php?action=EstanteriaMostrar">Ver estanterias</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?action=estado">Crear Estado</a>           
            <a class="dropdown-item" href="index.php?action=estadoMostrar">Ver Estados</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Empleado</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?action=Empleado">Crear Empleado</a>           
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?action=EmpleadoMostrar">Ver estanterias</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=Logout">Cerrar Sesion</a>
        </li>
      </ul>
      
      <div class="dropstart">
          <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"aria-expanded="false">Usuarios  <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i></button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Index.php?action=Login">Inicar Sesion <i class="fa-solid fa-user-tie" style="color: #ffffff;"></i> </a></li>
                  <li><a class="dropdown-item" href="Index.php?action=Registro"> Crear Usuario <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i></a></li>
              </ul>
      </div>
     
    </div>
  </div>
</nav>