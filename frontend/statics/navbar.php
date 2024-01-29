<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="#page-top"><img src="./frontend/assets/img/logo.png" alt="..." /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars ms-1"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase me-auto pe-4">
        <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="rutas" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Rutas De Formación
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Científico De Datos</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="./net.php">Ruta de Formación En .NET</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Ruta de Formación en Automatización</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="cursos" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Curso 1</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Curso 2</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Curso 3</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#somos">Quénes somos</a></li>
      </ul>
    </div>
    <div class="d-flex mx-auto">
      <!-- aquí puse el d-flex para que estos en específico quedaran a la derecha-->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Iniciar Sesión
      </button>

      <!-- Modal -->
      <div class="d-flex mx-auto">
        <!-- aquí puse el d-flex para que estos en específico quedaran a la derecha-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña">
                  </div>
                  <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="./frontend/js/scripts.js"></script>
</nav>