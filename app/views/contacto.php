<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/materia/bootstrap.css">
    <title>Inicio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../public/">Tarea</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../public/inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../public/lenguaje">Lenguaje Favorito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../public/contacto">Contactar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="width: 550px;" class="container-sm shadow text-center my-3 p-5">
  <div>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo htmlspecialchars($error); ?>
      </div>
    <?php endif; ?>
  </div>
    <h1 class="text-center">Contacto</h1>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="tex" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dui" class="col-sm-2 col-form-label">DUI:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dui" name="dui" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>

    <div >
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <pre>
          <?php print_r($_POST); ?>
        </pre>
      <?php endif; ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>