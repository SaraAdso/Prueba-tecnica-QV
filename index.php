<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Prueba Sara Palacio</title>
  <link rel="icon" type="image/x-icon" href="./frontend/assets/img/logo.png" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="..."
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="./frontend/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
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
          <li class="nav-item"><a class="nav-link" href="#novedades">Inicio</a></li>
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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Iniciar Sesión
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
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
  </nav>

  <header class="masthead">
    <div class="container">
      <div
        style="font-family: 'Nunito', sans-serif; margin-bottom: 30px; font-size: 50px; line-height: 1.2; color: #fff; font-weight: bold;">
        Continúa tu formación con IzyAcademy</div>
      <div
        style="font-family: 'Nunito', sans-serif; margin-bottom: 30px; font-size: 26px; line-height: 1.2; color: #fff; font-weight: bold;">
        Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos, apoyada en el uso de recursos
        interactivos para que tu aprendizaje sea efectivo.
      </div>
    </div>
  </header>

  <section class="page-section bg-light" id="novedades">
    <div class="container">
      <div class="text-left">
        <h4 class="section-heading text-uppercase font-weight-bold"
          style="color: #1D3A6C; font-family: 'Nunito', sans-serif;">Novedades</h4>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <!--Acuérdate que el col-lg hace que esté en toda la mitad de la pantalla, porque son 12 grillas de columna-->
          <div class="card">
            <img src="./frontend/assets/img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"
                style="background-color: #1D3A6C; color: white; font-family: 'Nunito', sans-serif; padding: 10px;">
                Bienvenidos a IzyAcademy</h5>
              <p class="card-text">Nos complace darte la bienvenida a este innovador espacio educativo donde la
                excelencia
                académica se encuentra con la comodidad y flexibilidad. Aquí, tu aprendizaje es nuestra prioridad y
                nuestro campues virtual está diseñado para ofrecere una experiencia
                educativa enriquecedora desde la comodidad de tu hogar.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card">
                <img src="./frontend/assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center"
                    style="background-color: #1D3A6C; color: white; font-family: 'Nunito', sans-serif; padding: 10px;">
                    Generación de comunidad</h5>
                  <p class="card-text">Nos complace generar vínculos sociales entre persons que comparten un mismo
                    interés, incentivar la construcción de un sentido de pertenencia y colaboración dentro de la
                    comunidad</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">
              <div class="card">
                <img src="./frontend/assets/img/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center"
                    style="background-color: #1D3A6C; color: white; font-family: 'Nunito', sans-serif; padding: 10px;">
                    Transferencia de conocimiento</h5>
                  <p class="card-text">Nos apasiona compartir información, habilidades y experiencias con el objetivo de
                    aplicas y aprovechar esta información paea el desarrollo de las habilidades. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">
              <div class="card">
                <img src="./frontend/assets/img/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center"
                    style="background-color: #1D3A6C; color: white; font-family: 'Nunito', sans-serif; padding: 10px;">
                    Certificaciones e insignias</h5>
                  <p class="card-text">IzyAcademy te brinda certificaciones e insignias digitales para que compartas y
                    avales los conocimientos adquiridos junto a nosotros.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">
              <div class="card">
                <img src="./frontend/assets/img/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center"
                    style="background-color: #1D3A6C; color: white; font-family: 'Nunito', sans-serif; padding: 10px;">
                    Apropiación de conocimiento</h5>
                  <p class="card-text">Desde IzyAcademy nos importa que adquieras, comprendas y asimiles el
                    conocimiento, habilidades e ideas que creamos para tí y para la comunidad.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section" id="aliados">
    <div class="container">
      <div class="text-center">
        <h4 class="section-heading text-uppercase font-weight-bold"
          style="color: #1D3A6C; font-family: 'Nunito', sans-serif;">Aliados</h4>
        <h3 class="section-subheading text-muted" style="color: #1D3A6C; font-family: 'Nunito', sans-serif;">Nuestros
          entrenamientos, pocesos formativos y certificaciones cuentan con el respaldo de empresas que confían en
          nosotros.</h3>
      </div>
      <div class="logos-container">
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado1.jpg" alt="Logo 1"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado2.png" alt="Logo 2"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado3.png" alt="Logo 3"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado4.jpg" alt="Logo 4"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado5.jpg" alt="Logo 5"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado6.jpg" alt="Logo 6"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado7.png" alt="Logo 7"></div>
        <div class="logo-item"><img src="./frontend/assets/img/logos/aliado8.png" alt="Logo 8"></div>
      </div>
    </div>
  </section>
  <section class="page-section" id="register">
    <div class="registration-container">
      <div class="image-container">
        <img src="./frontend/assets/img/register.png" alt="Imagen de registro">
      </div>
      <div class="form-container">
        <h2>Registro</h2>
        <form id="registrationForm" action="#" method="post">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" class="form-control form-control-lg"
            pattern="[a-zA-ZáéíóúüÁÉÍÓÚÜ\s]+" title="Debe introducir solo letras" required />

          <label for="apellidos">Apellidos:</label>
          <input type="text" id="apellidos" name="apellidos"  class="form-control form-control-lg"
            pattern="[a-zA-ZáéíóúüÁÉÍÓÚÜ\s]+" title="Debe introducir solo letras" required />

          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" class="form-control form-control-lg"
            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Debe contener por lo menos un símbolo '@' y un '.'." required />

          <label for="password">Contraseña:</label>
          <input type="password" id="password" name="password" required>

          <label for="confirmPassword">Confirmar Contraseña:</label>
          <input type="password" id="confirmPassword" name="confirmPassword" required>

          <div class="checkbox-container">
            <input type="checkbox" id="terminosCheckbox" required>
            <label for="terminosCheckbox">Acepto <a href="#">términos y condiciones</a></label>
          </div>

          <div class="checkbox-container">
            <input type="checkbox" id="politicasCheckbox" required>
            <label for="politicasCheckbox">Acepto <a href="#"> políticas de tratamiento de datos</a></label>
          </div>

          <button type="submit" id="registerButton" disabled>Registrarse</button>
        </form>
      </div>
    </div>
  </section>

  <?php include('./frontend/statics/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="./frontend/js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>