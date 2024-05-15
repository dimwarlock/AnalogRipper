<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Artículos Musicales</title>
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
        <div class="col-md-3">
            <h3>Categorías</h3>
            <ul class="list-group">
                <li class="list-group-item">Guitarras</li>
                <li class="list-group-item">Baterías</li>
                <li class="list-group-item">Teclados</li>
                <li class="list-group-item">Instrumentos de viento</li>
            </ul>
        </div>
        <div class="col-md-9">
            <h2>Productos Destacados</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="src/img/guitarra.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Guitarra</h5>
                            <p class="card-text">Fender EVH.</p>
                            <button onclick="agregarAlCarrito('Guitarra Fender EVH', 500)" class="btn btn-primary">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="src/img/teclado.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Teclado</h5>
                            <p class="card-text">Teclado Yamaha.</p>
                            <button onclick="agregarAlCarrito('Teclado Yamaha', 700)" class="btn btn-primary">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="src/img/pad.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pad Batería</h5>
                            <p class="card-text">Pad de batería electrónica.</p>
                            <button onclick="agregarAlCarrito('Pad Batería', 300)" class="btn btn-primary">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal right fade" id="carritoModal" tabindex="-1" role="dialog" aria-labelledby="carritoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="carritoModalLabel">Carrito de Compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="lista-carrito">
                <!-- Los productos agregados al carrito se mostrarán aquí -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total:</td>
                    <td id="total-carrito"></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
    let carrito = [];

    function agregarAlCarrito(nombre, precio) {
        // Verificar si el producto ya está en el carrito
        let encontrado = carrito.find(producto => producto.nombre === nombre);
        if (encontrado) {
            encontrado.cantidad++;
        } else {
            carrito.push({ nombre, precio, cantidad: 1 });
        }
        actualizarCarrito();
    }

    function eliminarDelCarrito(index) {
        carrito.splice(index, 1);
        actualizarCarrito();
    }

    function mostrarCarrito() {
        let carritoHtml = '';
        let totalCarrito = 0;
        carrito.forEach((producto, index) => {
            const totalProducto = producto.precio * producto.cantidad;
            totalCarrito += totalProducto;
            carritoHtml += `
                <tr>
                    <td>${producto.nombre}</td>
                    <td>$${producto.precio}</td>
                    <td><input type="number" value="${producto.cantidad}" min="1" onchange="actualizarCantidad(${index}, this.value)"></td>
                    <td>$${totalProducto}</td>
                    <td><button onclick="eliminarDelCarrito(${index})" class="btn btn-danger">Eliminar</button></td>
                </tr>`;
        });
        document.getElementById('lista-carrito').innerHTML = carritoHtml;
        document.getElementById('total-carrito').innerText = '$' + totalCarrito.toFixed(2);
        $('#carritoModal').modal('show'); // Mostrar el modal
    }

    function actualizarCantidad(index, cantidad) {
        carrito[index].cantidad = parseInt(cantidad);
        actualizarCarrito();
    }

    function actualizarCarrito() {
        // Actualiza la vista del carrito
        mostrarCarrito();
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>