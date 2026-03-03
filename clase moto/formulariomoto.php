<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Moto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card bg-black text-white p-4 shadow border border-danger" style="width: 400px;">

        <h2 class="text-center mb-4 text-danger">Registrar Moto</h2>

        <form action="vermotocicleta.php" method="POST">

            <div class="mb-3">
                
                <label class="form-label">Marca de la Moto</label>

                <input type="text" name="marca" class="form-control bg-light text-dark" required>
            </div>

            <div class="mb-3">

                <label class="form-label">Modelo de la Moto</label>

                <input type="text" name="modelo" class="form-control bg-light text-dark" required>

            </div>
            
            <div class="mb-3">

                <label class="form-label">Cilindraje de la Moto</label>

                <input type="text" name="cilindraje" class="form-control bg-light text-dark" required>

            </div>

            <button type="submit" class="btn btn-danger w-100 mb-2">Enviar</button>

            <button type="reset" class="btn btn-outline-danger w-100">Borrar</button>

        </form>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>