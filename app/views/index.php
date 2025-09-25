<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/materia/bootstrap.css">
    <title>Inicio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg text-white bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="../public/">Mi Sitio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./lenguaje">Lenguaje Favorito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./contacto">Contactar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Header Simple -->
    <div class="container mt-4">
        <div class="text-center">
            <h1 class="text-primary">Blog Personal MVC</h1>
            <p class="text-muted">Ejercicio Práctico Evaluado - Patrón MVC en PHP</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3>Descripción del Proyecto</h3>
                </div>
                <div class="card-body">
                    <h5 class="text-primary">Objetivo del Ejercicio</h5>
                    <p>
                        Este proyecto implementa un <strong>blog personal</strong> utilizando el patrón 
                        <span class="badge bg-secondary">MVC (Modelo-Vista-Controlador)</span> en PHP, 
                        como parte del ejercicio práctico evaluado con ponderación de <strong>1 punto</strong> 
                        del examen parcial.
                    </p>

                    <h5 class="text-primary mt-4">Secciones del Blog</h5>
                    
                    <div class="mb-3">
                        <div class="card border-primary">
                            <div class="card-body">
                                <h6 class="text-primary">Inicio</h6>
                                <p class="mb-0">
                                    Información detallada sobre mi perfil personal, 
                                    experiencia y trayectoria profesional.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="card border-success">
                            <div class="card-body">
                                <h6 class="text-success">Mi Lenguaje Favorito</h6>
                                <p class="mb-0">
                                    Descripción de los lenguajes de programación que más utilizo 
                                    y las razones de mi preferencia.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="card border-warning">
                            <div class="card-body">
                                <h6 class="text-warning">Contactar</h6>
                                <p>Formulario de contacto con validaciones usando expresiones regulares para:</p>
                                <ul class="mb-0">
                                    <li><strong>Correo electrónico:</strong> Formato estándar de email</li>
                                    <li><strong>Teléfono:</strong> Formato salvadoreño (####-####)</li>
                                    <li><strong>DUI:</strong> Formato salvadoreño (########-#)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mt-4">
                        <h6>Características Técnicas</h6>
                        <ul class="mb-0">
                            <li>Patrón de arquitectura <strong>MVC</strong></li>
                            <li>Framework CSS <strong>Bootstrap 5</strong></li>
                            <li>Validaciones con <strong>expresiones regulares</strong></li>
                            <li>Responsive design adaptable a dispositivos móviles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>