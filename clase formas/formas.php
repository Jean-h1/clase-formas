<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Fórmulas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

<div class="d-flex">

    <!-- ===== BARRA LATERAL ===== -->
    <?php include 'barranavv.html'; ?>

    <!-- ===== CONTENIDO ===== -->
    <div class="container-fluid p-4">

        <div class="card shadow border-danger">
            <div class="card-header bg-white text-center">
                <h3 class="text-danger fw-bold">MIS FÓRMULAS</h3>
            </div>

            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Selecciona la figura:</label>
                    <select id="dibujo" class="form-select">
                        <option value="" disabled selected>Seleccione la fórmula</option>
                        <option value="circulo">Círculo</option>
                        <option value="triangulo">Triángulo</option>
                        <option value="rectangulo">Rectángulo</option>
                    </select>
                </div>

                <div id="inputs" class="mt-3"></div>

                <div class="text-center mt-4">
                    <button onclick="calcular()" class="btn btn-danger px-4 m-2 fw-bold">
                        Calcular
                    </button>

                    <button onclick="resetear()" class="btn btn-danger px-4 m-2 fw-bold">
                        Cancelar
                    </button>
                </div>

                <div id="resultado" class="mt-4 text-center fw-bold fs-4"></div>

            </div>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
const dibujo = document.getElementById("dibujo");
const inputs = document.getElementById("inputs");
const resultado = document.getElementById("resultado");

dibujo.addEventListener("change", function(){

    resultado.innerHTML = "";
    inputs.innerHTML = "";

    if(this.value === "triangulo"){
        inputs.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Base:</label>
                <input type="number" id="base" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Altura:</label>
                <input type="number" id="altura" class="form-control">
            </div>
        `;
    }

    else if(this.value === "rectangulo"){
        inputs.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Base:</label>
                <input type="number" id="base" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Altura:</label>
                <input type="number" id="altura" class="form-control">
            </div>
        `;
    }

    else if(this.value === "circulo"){
        inputs.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Radio:</label>
                <input type="number" id="radio" class="form-control">
            </div>
        `;
    }
});

function calcular(){

    if(!dibujo.value){
        resultado.innerHTML = "Selecciona una figura primero.";
        return;
    }

    if(dibujo.value === "triangulo"){
        let base = parseFloat(document.getElementById("base").value);
        let altura = parseFloat(document.getElementById("altura").value);

        if(isNaN(base) || isNaN(altura)){
            resultado.innerHTML = "Ingresa valores válidos.";
            return;
        }

        resultado.innerHTML = "Área del triángulo: " + ((base * altura) / 2);
    }

    else if(dibujo.value === "rectangulo"){
        let base = parseFloat(document.getElementById("base").value);
        let altura = parseFloat(document.getElementById("altura").value);

        if(isNaN(base) || isNaN(altura)){
            resultado.innerHTML = "Ingresa valores válidos.";
            return;
        }

        resultado.innerHTML = "Área del rectángulo: " + (base * altura);
    }

    else if(dibujo.value === "circulo"){
        let radio = parseFloat(document.getElementById("radio").value);

        if(isNaN(radio)){
            resultado.innerHTML = "Ingresa un valor válido.";
            return;
        }

        resultado.innerHTML = "Área del círculo: " + (Math.PI * radio * radio).toFixed(2);
    }
}

function resetear(){
    inputs.innerHTML = "";
    resultado.innerHTML = "";
    dibujo.selectedIndex = 0;
}
</script>

</body>
</html>