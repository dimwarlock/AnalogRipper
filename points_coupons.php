<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Puntos y Cupones</title>
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
<div id="logo1">
    <img src="src/img/logo1.png" id="logo" alt="...">
</div>    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    <div class="container">
        
        <a class="navbar-brand" href="#">Analog Ripper</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a href="#" onclick="mostrarCarrito()" class="btn btn-outline-success my-2 my-sm-0">Carrito</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h3>Tus Puntos</h3>
            <p class="text-white">Tienes <span id="puntos-disponibles">500</span> puntos disponibles.</p>
            <button onclick="canjearPuntos()" class="btn btn-primary">Canjear Puntos por Productos</button>
        </div>
        <div class="col-md-6">
            <h3>Aplicar Cupón</h3>
            <div class="input-group mb-3">
                <input id="cupon-input" type="text" class="form-control" placeholder="Ingresa tu código de cupón" aria-label="Ingresa tu código de cupón" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button onclick="aplicarCupon()" class="btn btn-outline-secondary" type="button" id="button-addon2">Aplicar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Productos Canjeables por Puntos -->
<div id="productos-ventana" class="ventana" style="display: none;">
    <div class="contenido">
        <h2>Productos Canjeables por Puntos</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="src/img/producto_a.jpg" class="card-img-top" alt="Producto A">
                    <div class="card-body">
                        <h5 class="card-title">Producto A</h5>
                        <p class="card-text">Descripción del Producto A.</p>
                        <p class="card-text"><strong>200 Puntos</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="src/img/producto_b.jpg" class="card-img-top" alt="Producto B">
                    <div class="card-body">
                        <h5 class="card-title">Producto B</h5>
                        <p class="card-text">Descripción del Producto B.</p>
                        <p class="card-text"><strong>300 Puntos</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="src/img/producto_c.jpg" class="card-img-top" alt="Producto C">
                    <div class="card-body">
                        <h5 class="card-title">Producto C</h5>
                        <p class="card-text">Descripción del Producto C.</p>
                        <p class="card-text"><strong>400 Puntos</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="toggleVentana('productos-ventana', false)" class="btn btn-secondary">Cerrar</button>
    </div>
</div>

<!-- Alerta de Cupón Aplicado -->
<div id="cupon-alert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
    ¡Cupón aplicado con éxito! Tu próxima compra tendrá un descuento del 20%.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script>
    //ventana modal
    function toggleVentana(ventanaId, mostrar) {
        var ventana = document.getElementById(ventanaId);
        ventana.style.display = mostrar ? 'block' : 'none';
    }

    //canjear puntos por productos
    function canjearPuntos() {
        toggleVentana('productos-ventana', true);
    }

    //aplicar un cupón
    function aplicarCupon() {
        var cuponInput = document.getElementById('cupon-input');
        var cuponCodigo = cuponInput.value.trim();
        if (cuponCodigo !== '') {
            //aplicar el cupón y mostrar la alerta de cupón aplicado
            document.getElementById('cupon-alert').style.display = 'block';
            cuponInput.value = ''; //cerrar campo de cupón después de aplicarlo
        } else {
            alert('Por favor ingresa un código de cupón válido.');
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
