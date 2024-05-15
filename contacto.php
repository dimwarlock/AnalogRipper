<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!-- Utiliza bootstrap.min.css -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000; /* Fondo negro */
            color: #fff; /* Letras blancas */
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #fff; /* Letras blancas en la barra de navegación */
        }
        .navbar-dark .navbar-brand {
            color: #fff; /* Letras blancas para el logotipo */
        }
        .form-control {
            background-color: #fff; /* Fondo blanco para los campos de entrada */
            color: #000; /* Texto negro para los campos de entrada */
        }
        .btn-primary {
            background-color: #dc3545; /* Color carmesí oscuro para botones */
            border-color: #dc3545; /* Color del borde para botones */
        }
        .btn-primary:hover {
            background-color: #c82333; /* Cambio de color al pasar el ratón sobre el botón */
            border-color: #bd2130; /* Cambio de color del borde al pasar el ratón sobre el botón */
        }
        .footer {
            background-color: #000; /* Fondo negro para el pie de página */
            color: #fff; /* Letras blancas para el pie de página */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Analog Ripper</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contacto<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2>Contacto</h2>
    <form>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="5" placeholder="Escriba su mensaje"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
    </form>
</div>

<footer class="footer mt-auto py-3 bg-dark text-white">
    <div class="container text-center">
        <span class="text-muted">© 2024 Analog Ripper. Todos los derechos reservados.</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
