<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Automovil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">


<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
  <div class="bg-dark p-4">
    <h5 class="text-danger h4">Menú</h5>
    <span class="text-white">Barra de navegación</span>
  </div>
</div>



<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card bg-black text-white p-4 shadow border border-danger" style="width: 400px;">

        <h2 class="text-center mb-4 text-danger">Registrar Automóvil</h2>

        <form action="verautomovil.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Marca del Auto</label>
                <input type="text" name="marca" class="form-control bg-light text-dark" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Modelo del Auto</label>
                <input type="text" name="modelo" class="form-control bg-light text-dark" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Puertas del Carro</label>
                <input type="number" name="puertas" class="form-control bg-light text-dark" required>
            </div>

            <button type="submit" class="btn btn-danger w-100">
                Enviar
            </button>

        </form>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


