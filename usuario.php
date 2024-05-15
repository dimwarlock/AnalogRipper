<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mi Cuenta</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
       
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #000000;
}
#logo1{
    display: flex;
    align-items: center;
    justify-content: center;
}
#logo{
    display: flex;
    align-items: center;
    justify-content: center;
}
/* Cambiando el color de fondo de la barra de navegación */
.navbar {
    background-color: #5f0000 !important;
    color: #ffffff;
}
/* Cambiando el color del texto de la barra de navegación */
.navbar-dark .navbar-nav .nav-link {
    color: #ffffff;
}
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
.container {
    margin: 20px auto;
    padding: 0 20px;
    color: #ffffff;
}
form {
    margin-bottom: 20px;
}
</style>
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
            </div>
        </div>
    </nav>
<div class="container">
    <div id="user-info">
        <h2>Información del Usuario</h2>
        <form id="edit-form">
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" value="user" disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="user@example.com" disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" value="Nombre Usuario">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" value="Dirección Usuario">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
        <button id="change-password" class="btn btn-primary">Cambiar contraseña</button>
        <button id="delete-account" class="btn btn-danger">Eliminar cuenta</button>
    </div>
</div>
<script>
    document.getElementById('edit-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Aquí deberías actualizar la información del usuario en la base de datos
        alert('Información actualizada');
    });

    document.getElementById('change-password').addEventListener('click', function() {
        // Aquí puedes abrir un modal con un formulario para cambiar la contraseña
        alert('Funcionalidad de cambio de contraseña aún no implementada');
    });

    document.getElementById('delete-account').addEventListener('click', function() {
        // Aquí puedes abrir un modal de confirmación para eliminar la cuenta
        alert('Funcionalidad de eliminación de cuenta aún no implementada');
    });
</script>
</body>
</html>