<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Instrumento Musical</title>
<link rel="stylesheet" href="src/css/bootstrap.min.css">
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
img{

    
    max-width: 20%;
}
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
   
    
}
.card{
     background-color: #5f0000;
     color: #fff;
     display: flex;
    align-items: center;
    justify-content: center;
}
.product {
    border-bottom: 1px solid #5f0000;
    padding: 10px 0;
}
.product img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}
button {
    background-color: #5f0000;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
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
    <div class="card">
        <h2 class="card-title">Guitarra Acústica</h2>
        <img src="src/img/guitarra.jpeg" class="card-img-top" alt="Guitarra Acústica">
        <div class="card-body">
            <p class="card-text">La guitarra acústica es un instrumento de cuerda pulsada, caja de resonancia y encordado metálico.</p>
            <p class="card-text">Precio: $500</p>
            <p class="card-text">Valoracion: 3.5/5</p>
            <button class="btn btn-primary">Agregar al carrito</button>
            
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>